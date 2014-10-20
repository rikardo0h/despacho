<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Cobros_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('cobros_modelo');
			//$this->load->library();
			$this->load->helper('form');
			$this->load->helper('url');
		}
		
		public function abogadoCobros(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==2){
				$datos = array('clientes' => $this->cobros_modelo->obtenerClientes());
				$this->load->view('abogado_CobroClientesVta',$datos);
			}
		}

		public function detallePago(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==2){
				$id = $this->input->post("clienteid");
				$casos = $this->cobros_modelo->casos_cliente($id);
				$datos = array( 'casosCliente' => $casos,'cliente' => $this->cobros_modelo->detalleCliente($id));
				$this->load->view('detallePago',$datos);
			}
		}

		public function pagar(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==2){
				$caso = $this->input->post("casoid");
				$valor = $this->input->post("valor");
 				$pendiente = $this->cobros_modelo->cantidad($caso,$valor);
 				$this->cobros_modelo->pagar($caso,$pendiente);
				$id = $this->input->post("clienteid");
				$casos = $this->cobros_modelo->casos_cliente($id);
				$datos = array( 'casosCliente' => $casos,'cliente' => $this->cobros_modelo->detalleCliente($id));
				$this->abogadoCobros();
			}
		}


}		
?>