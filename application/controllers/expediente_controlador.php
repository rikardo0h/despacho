<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Expediente_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			//$this->load->model();
			//$this->load->library();
			$this->load->helper('url');
		}
		
		public function abogadoExpedientes(){
			$this->load->view('abogado_ExpedientesVta');
		}

		public function auxiliarExpedientes(){
			$this->load->view('auxiliar_ExpedientesVta');
		}
}		
?>