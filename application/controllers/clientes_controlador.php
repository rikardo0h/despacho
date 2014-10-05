<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Clientes_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			//$this->load->library();
			$this->load->helper(array('url','form'));
			$this->load->model('clientes_modelo');
		}
		
		public function secretariaClientes(){
			$datos = array('clientes' => $this->clientes_modelo->obtenerClientes());
			$this->load->view('secretaria_ClientesVta',$datos);
		}

		public function crearClientes(){
			$this->load->view('secretaria_NuevoClienteVta');
		}
}		
?>