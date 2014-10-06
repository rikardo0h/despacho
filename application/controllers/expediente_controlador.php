<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Expediente_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			//$this->load->model();
			//$this->load->library();
			$this->load->helper('url');
		}
		
		public function abogadoExpedientes(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==2){
				$this->load->view('abogado_ExpedientesVta');
			}
			
		}

		public function auxiliarExpedientes(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==4){
				$this->load->view('auxiliar_ExpedientesVta');
			}
			
		}
}		
?>