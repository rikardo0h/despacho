<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Seguimiento_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			//$this->load->model();
			//$this->load->library();
			$this->load->helper('url');
		}
		
		public function abogadoSeguimientos(){
			$this->load->view('abogado_SeguimientosVta');
		}

		public function auxiliarSeguimientos(){
			$this->load->view('auxiliar_SeguimientosVta');
		}
}		
?>