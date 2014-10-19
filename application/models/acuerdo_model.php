<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Acuerdo_model extends CI_Model
{
	public function construct()
	{
		parent::__construct();
	}
	function insert_acuerdo($fechaCreacion,$fechaResolucion,$Nombre,$Estado,$Descripcion,$Caso_idAcuerdo)
	{
 	$data = array(
            'nombreAcuerdo' => $Nombre,
            'descripcion' => $Descripcion,
            'estado' => $Estado,
            'fecha_crea' => $fechaCreacion,
            'fecha_resol' => $fechaResolucion,
            'caso_idacuerdo' =>$Caso_idAcuerdo         
        );
        return $this->db->insert('acuerdo', $data);
	}

	public function obtenerAcuerdos($caso){ //Incluye datos del documento
		//$this->db->select('numero','idcliente','nombre', 'rfc','fecha','estado','resolucion');
		$this->db->select('*');
		$this->db->from('acuerdo');
		$this->db->where('caso_idacuerdo',$caso);
		$casos = $this->db->get();
		return $casos->result();
	}


}
