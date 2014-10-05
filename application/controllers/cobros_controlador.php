<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Cobros_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			//$this->load->model();
			//$this->load->library();
			$this->load->helper('url');
		}
		
		public function abogadoCobros(){
			$this->load->view('abogado_CobroClientesVta');
		}
}		
?>