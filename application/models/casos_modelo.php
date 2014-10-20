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
	            'estado' => "Abierto",
	            'fecha' => $fechaCreacion,
	            'resolucion' => "Por definir",
	            'costo' => 5000,
	            'pagado' => 0,
	            'cliente_idcliente' => "1"         
	        );
	 	$this->db->insert('caso', $data);
	 	$dato = array('fecha' =>  $fechaCreacion,
	 					'caso_idasunto' => $this->db->insert_id());
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


	public function borrarCasoCompleto($idCaso){ //Cancelar Caso
		$this->obtenerExpe2($idCaso);
		$this->db->delete('acuerdo', array('caso_idacuerdo' => $idCaso));
		$this->db->delete('caso', array('idcaso' => $idCaso)); 
	}

	 public function detalleCaso($id)
    {
        $query = $this->db->get_where('caso',array('idcaso' => $id));
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
    }


    public function actualizar_Detalle($id,$estado, $resolucion){
    	$data = array(
               'estado' => $estado,
               'resolucion' => $resolucion,
            );
		$this->db->where('idcaso', $id);
		$this->db->update('caso', $data); 

    }
    public function cancelarCaso($id){
    	$this->obtenerExpe($id);
    	$data = array(
               'estado' => "Cancelado",
               'resolucion' => "Cancelado el dia: ".date('Y-m-d-H:i-s')
            );
		$this->db->where('idcaso', $id);
		$this->db->update('caso', $data); 
    }

    ///Consulta a otras BD
 	public function obtenerExpe($id){
 		$query = $this->db->get_where('expediente',array('caso_idasunto' => $id));
       	if ($query->num_rows() > 0)
		{
	   		$row = $query->row(); 
	   		$this->db->delete('documento', array('expediente_idexpediente' => $row->idexpediente));
	   		$this->db->delete('expediente', array('idexpediente' => $row->idexpediente)); 
		}
 	}
 	public function obtenerExpe2($id){
 		$query = $this->db->get_where('expediente',array('caso_idasunto' => $id));
       	$row = $query->row(); 
   		$this->db->delete('documento', array('expediente_idexpediente' => $row->idexpediente));
   		$this->db->delete('expediente', array('idexpediente' => $row->idexpediente)); 		
 	}


}
?>