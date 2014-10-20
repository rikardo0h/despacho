<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Expediente_modelo extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database("default");
	}
	public function expedienteId($caso){
 		$sql= "SELECT idexpediente FROM despacho.expediente where caso_idasunto = ? LIMIT 1";
		$query = $this->db->query($sql,array($caso));
		$resultado = $query->row_array();	
		return $resultado['idexpediente'];
	}
	
	public function obtenerExpediente($caso){ //Incluye datos del documento
		$this->db->select('*');
		$this->db->from('documento');
		$this->db->where('documento.expediente_idexpediente',$caso);
		$documentos = $this->db->get();
		return $documentos->result();
	}
	
	public function borrarCaso($idCaso){
		$this->db->delete('caso', array('idcaso' => $idCaso)); 
	}

	//GESTION DE ARCHIVOS
	public function subir_archivo($desc,$idExp,$nombre,$idReal){
		$data = array( 'nombre' => $nombre,
						'descripcion' => $desc,
					   'fecha' => date('Y-m-d H:i:s'),
					   'expediente_idexpediente' => $idReal);
		$this->db->insert('documento', $data);
	}

	public function eliminar_material($id,$idExp,$nombre){
		$this->db->delete('documento', array('iddocumento' => $id));
		$ruta='/Applications/MAMP/htdocs/despacho/uploads/'.$nombre;
		unlink($ruta);
	}

	///CONTROL DE ARCHIVOS


	public function usuario_mat($dueno,$matId){
		$data = array('users_id' => $dueno, 
					  'material_idmaterial' => $matId);
		$this->db->insert('users_has_material', $data);
	}
	

	public function id_file($ide){
		$rest = substr($ide, 0, -5);
		//zip|rar|pdf|docx|txt
		$sql= "SELECT idmaterial FROM cursos.material where nombre = ? LIMIT 1";
		$query = $this->db->query($sql,array($rest));
		$resultado = $query->row_array();	
		return $resultado['idmaterial'];
	}	

	

}
?>