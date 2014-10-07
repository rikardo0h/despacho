<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Expediente_modelo extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database("default");
	}

	
	public function obtenerExpediente($caso){ //Incluye datos del documento
		//$this->db->select('numero','idcliente','nombre', 'rfc','fecha','estado','resolucion');
		$this->db->select('*');
		$this->db->from('expediente');
		$this->db->join('documento', 'expediente.idexpediente = documento.expediente_idexpediente ');
		$this->db->where('expediente.caso_idasunto',$caso);
		$casos = $this->db->get();
		return $casos->result();
	}
	
	public function borrarCaso($idCaso){
		$this->db->delete('caso', array('idcaso' => $idCaso)); 
	}


}
?>