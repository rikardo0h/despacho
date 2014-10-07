<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Casos_modelo extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database("default");
	}

	
	public function obtenerCasos(){ //Incluye datos clientes
		//$this->db->select('numero','idcliente','nombre', 'rfc','fecha','estado','resolucion');
		$this->db->select('*');
		$this->db->from('caso');
		$this->db->join('cliente', 'caso.cliente_idcliente = cliente.idcliente');
		$casos = $this->db->get();
		return $casos->result();
	}
	public function borrarCaso($idCaso){
		$this->db->delete('caso', array('idcaso' => $idCaso)); 
	}


}
?>