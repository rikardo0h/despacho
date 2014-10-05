<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes_modelo extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database("default");
	}

	
	public function obtenerClientes(){
		$clientes = $this->db->get('cliente');
		return $clientes->result();
	}
}
?>