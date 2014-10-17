<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Pagos_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('pagos_modelo');
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
			$this->load->library('ion_auth');
			$this->lang->load('auth');
		}
		
			public function secretariaPagos(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==3){
				$datos = array('pagos' => $this->pagos_modelo->obtenerPagos());
				$this->load->view('secretaria_pagosVta',$datos);
			}
		}

			public function pagar(){
				$this->load->view('secretaria_pagosVta');	
			}
			
		
}		
?>