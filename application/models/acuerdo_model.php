<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Acuerdo_model extends CI_Model
{
	public function construct()
	{
		parent::__construct();
	}
	function insert_acuerdo($fechaCreacion,$fechaResolucion,$Acuerdo,$Estado,$Descripcion)
	{
       
            
            

		 $data = array(
            'descripcion' => $Descripcion,
            'estado' => $Estado,
            'fecha_crea' => $fechaCreacion,
            'fecha_resol' => $fechaResolucion,
            'caso_idasunto' =>$Acuerdo         
        );
        return $this->db->insert('acuerdo', $data);
	}
}
