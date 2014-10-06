<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Agenda_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			//$this->load->model();
			//$this->load->library();
			$this->load->helper('url');
		}
		
		public function abogadoAgenda(){
			$data['usuario'] = $this->session->userdata['rol'];
			//echo $data['usuario'];
			if ($data['usuario']==2){
			$this->load->view('abogado_AgendaVta',$data);
		}
		}

		public function secretariaAgendas(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==3){
				$this->load->view('secretaria_AgendasVta');
			}
		}

		public function auxAgendas(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==4){
				$this->load->view('auxiliar_AgendasVta');
			}
		}
}		
?>