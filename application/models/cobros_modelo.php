<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cobros_modelo extends CI_Model {
	public function __construct() {
		parent::__construct();
		$this->load->database("default");
	}

	
	public function obtenerClientes(){
		$clientes = $this->db->get('cliente');
		return $clientes->result();
	}


	 public function detalleCliente($id)
    {
        $query = $this->db->get_where('cliente',array('idcliente' => $id));
        if($query->num_rows() > 0 )
        {
            return $query->row();
        }
    }

    public function casos_cliente($id){
		$this->db->select('*');
		$this->db->from('caso');
		$this->db->where('caso.cliente_idcliente',$id);
		$casos = $this->db->get();
		return $casos->result();
    }

	public function cantidad($id,$valor){
		$sql= "SELECT pagado FROM despacho.caso where idcaso = ? LIMIT 1";
		$query = $this->db->query($sql,array($id));
		$resultado = $query->row_array();	
		$cantidad =$resultado['pagado'];
		return $cantidad+$valor;
	}


     public function pagar($id,$valor){
    	$data = array(
               'pagado' => $valor,
            );
		$this->db->where('idcaso', $id);
		$this->db->update('caso', $data); 
    }




}
?>