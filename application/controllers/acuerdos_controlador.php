<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Acuerdos_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			//$this->load->model();
			//$this->load->library();
			$this->load->helper('url');
		}
		
		public function abogadoAcuerdos(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==2){
				$this->load->view('abogado_AcuerdosVta');
			}
			
		}

		public function auxiliarAcuerdos(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==4){
				$this->load->view('auxiliar_AcuerdosVta');
			}
			
		}
}		
?>