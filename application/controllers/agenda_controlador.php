<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Agenda_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			//$this->load->model();
			//$this->load->library();
			$this->load->helper('url');
		}
		
		public function abogadoAgenda(){
			$this->load->view('abogado_AgendaVta');
		}

		public function secretariaAgendas(){
			$this->load->view('secretaria_AgendasVta');
		}
}		
?>