<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Expediente_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			//$this->load->model();
			//$this->load->library();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->helper(array('download', 'file', 'url', 'html', 'form'));
            $this->folder = 'uploads/';
			$this->load->model('expediente_modelo');
            $this->load->library('session');
		}

		
		public function abogadoExpedientes(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==2){
                                $data['caso_id'] = $this->session->userdata['aux'];
				$this->load->view('abogado_ExpedientesVta',$data);
			}
		}

		public function auxiliarExpedientes(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==4){
				$this->load->view('auxiliar_ExpedientesVta');
			}
		}

		public function detalleExpediente(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==2 or $data['usuario']==4){
                $auxCaso = $this->session->userdata['aux'];
                $exp = $this->expediente_modelo->expedienteId($auxCaso);
                $this->session->set_userdata('expActual', $exp);
				$documentos = array('documentos' => $this->expediente_modelo->obtenerExpediente($this->expediente_modelo->expedienteId($auxCaso)));
				$this->load->view('detalle_ExpedientesVta',$documentos);
			}
		}


		///////// CONTROL DE ARCHIVOS

     
   		public function subida()
        {
            $this->load->view('subida_documetoVta', array('error' => ' ' )); 
        }

   		//************ CARGA DE ARCHIVOS  ****************   
    	public function do_upload() 
        {     
            $config['upload_path'] = $this->folder;
            $config['allowed_types'] = 'zip|rar|pdf|docx|txt';
            $config['remove_spaces']=TRUE;
            $config['max_size']    = '10000';
            $nombre="doc".date('Y-m-d-H:i-s');
            $config['file_name']  = $nombre;
            $this->load->library('upload', $config);



        if ( ! $this->upload->do_upload())
            {
                $error = array('error' => "Error en el tipo de archivo");
                $this->load->view('subida_documetoVta', $error);
            }
            else
            {
                $descrip = $this->input->post('descrip');
                $e = $this->upload->data();
                $ex = $e['file_ext'];
                $otro = $this->session->userdata['expActual'];
                $this->expediente_modelo->subir_archivo($descrip,$this->session->userdata['aux'],$nombre.$ex,$otro);
                $data = array('upload_data' => $this->upload->data());
                $this->load->view('subida_documentoCoVta', $data);
            }
       } 

    public function info(){ 
        $files = get_filenames($this->folder, FALSE);
        if($files){
            $data['files']=$files;
            }else{
                $data['files']=NULL;
            }
       //FIN FILTRADO
        $this->load->view('filenames',$data);   
    }

	function eliminarFile(){
    	$valor = $this->input->post('casoid');
    	$nombre = $this->input->post('nombre');
        $this->expediente_modelo->eliminar_material($valor,$this->session->userdata['aux'],$nombre);
        $this->detalleExpediente();
    }

      function downloads(){
      	$name = $this->input->post('nombre');
        $data = file_get_contents($this->folder.$name); 
        force_download($name,$data); 
    }
  
}		
?>