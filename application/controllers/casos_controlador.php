<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Casos_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			//$this->load->model();

			//$this->load->library();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('casos_modelo');
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
			$this->load->library('ion_auth');
			$this->lang->load('auth');
		}
		
		public function abogadoCasos(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==2){
				$datos = array('casos' => $this->casos_modelo->obtenerCasos());
				$this->load->view('abogado_CasosVta',$datos);
			}
			
		}

		public function crearCaso(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==2){
				$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
				$this->load->view('abogado_NuevoCasoVta',$data);
			}
		}

		public function eliminarCaso(){
				$data['usuario'] = $this->session->userdata['rol'];
				if ($data['usuario']==2){
					$this->casos_modelo->borrarCaso($this->input->post('casoid'));
					$this->abogadoCasos();
				}
		}


		public function verCaso(){
			$data['usuario'] = $this->session->userdata['rol'];
			$this->session->set_userdata('aux', $this->input->post('casoid'));
			$this->session->set_flashdata('temp',$this->input->post('casoid'));
			if ($data['usuario']==2){
				redirect('expediente_controlador/detalleExpediente');
			}
			if ($data['usuario']==4){
				redirect('expediente_controlador/detalleExpediente');
			}
		}

		////

		public function auxiliarCasos(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==4){
				$this->load->view('auxiliar_CasosVta');
			}
			
		}
}
?>