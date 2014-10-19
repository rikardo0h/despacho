<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Casos_modelo extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database("default");
	}
	public function nuevo_caso($fechaCreacion,$Numero,$Descripcion)
	{
	 	$data = array(
	            'numero' => $Numero,
	            'estado' => "true",
	            'fecha' => $fechaCreacion,
	            'resolucion' => "daaa",
	            'cliente_idcliente' => "1"         
	        );
	 	$this->db->insert('caso', $data);

	 	$dato = array('fecha' =>  $fechaCreacion,
	 					'caso_idasunto' => $this->db->insert_id()  );
	     return $this->db->insert('expediente', $dato);
	}
	
	public function obtenerCasos(){ //Incluye datos clientes
		//$this->db->select('numero','idcliente','nombre', 'rfc','fecha','estado','resolucion');
		$this->db->select('*');
		$this->db->from('caso');
		$this->db->join('cliente', 'caso.cliente_idcliente = cliente.idcliente');
		$casos = $this->db->get();
		return $casos->result();
	}
	public function borrarCaso($idCaso){ //Cancelar Caso
		$this->db->delete('acuerdo', array('caso_idacuerdo' => $idCaso));
		$this->db->delete('caso', array('idcaso' => $idCaso)); 
	}

	public function cancelarCaso(){
		$this->db->delete('acuerdo', array('caso_idacuerdo' => $idCaso));
		$this->db->delete('caso', array('idcaso' => $idCaso)); 
	}


}
?>