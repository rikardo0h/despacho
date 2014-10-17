<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pagos_modelo extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database("default");
	}

	
	public function obtenerPagos(){ //Incluye datos clientes
		//$this->db->select('numero','idcliente','nombre', 'rfc','fecha','estado','resolucion');
		$clientes = $this->db->get('pago');
		return $clientes->result();
	}
}
?>