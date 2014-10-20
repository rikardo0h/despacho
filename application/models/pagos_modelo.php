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

	public function nuevoPago($concepto,$fechaLimite,$cantidad,$descripcion){
		$data = array(
	            'concepto' => $concepto,
	            'fecha_lim' => $fechaLimite,
	            'cantidad' => $cantidad,
	            'descripcion' => $descripcion,
	        );
	 return $this->db->insert('pago', $data);
	}
	public function pagar($id){
		$data = array(
               'fecha_pag' => date('Y-m-d-H:i-s'),
            );
		$this->db->where('idpago', $id);
		$this->db->update('pago', $data); 
	}

	
}
?>