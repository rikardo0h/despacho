<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Acuerdos_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			//$this->load->model();
			//$this->load->library();
			$this->load->helper('url');
		}
		
		public function abogadoAcuerdos(){
			$this->load->view('abogado_AcuerdosVta');
		}

		public function auxiliarAcuerdos(){
			$this->load->view('auxiliar_AcuerdosVta');
		}
}		
?>