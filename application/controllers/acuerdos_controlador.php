<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Acuerdos_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('acuerdo_model');
      $this->load->library(array('form_validation'));
			 $this->load->helper(array('url','form'));
                        $this->load->database('default'); 
		}
                
                
                public function index()
                {       //cargamos nuestra vista
                        $this->load->view("abogado_AcuerdosVta");
                }
		
		public function abogadoAcuerdos(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==2){
				$this->load->view('abogado_AcuerdosVta');
			}
			
		}

		public function auxiliarAcuerdos(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==4){
				$this->load->view('auxiliar_AcuerdosVta');
			}
		}
      
    public function detalleAcuerdos(){
      $data['usuario'] = $this->session->userdata['rol'];
      if ($data['usuario']==2 or $data['usuario']==4){
          $acuerdos = array('acuerdos' => $this->acuerdo_model->obtenerAcuerdos($this->session->userdata['tAc']));
          $this->load->view('detalle_AcuerdosVta',$acuerdos);
      }
    } 


                
                public function nuevo_acuerdo(){
                    //si se ha hecho submit en el formulario...
                    if(isset($_POST['acuerdoB']))
                    {
                    //creamos nuestras reglas de validación, 
                    //required=campo obligatorio
                      $this->form_validation->set_rules('fechaCreacion', 'Fecha de creacion', 'valid_date|xss_clean');
                      $this->form_validation->set_rules('fechaResolucion', 'Fecha de resolución', 'valid_date|xss_clean');
                      $this->form_validation->set_rules('nombre', 'Nombre', 'required|xss_clean');
                      $this->form_validation->set_rules('estado', 'Estado', 'required|xss_clean');
                      $this->form_validation->set_rules('descripcion', 'Descripción', 'required|xss_clean');
                      $this->form_validation->set_rules('caso_idAcuerdo', 'Caso', 'required|xss_clean');
                      //comprobamos si los datos son correctos, el comodín %s nos mostrará el nombre del campo
                    //que ha fallado 
                      $this->form_validation->set_message('required', 'El  %s es requerido');
                      $this->form_validation->set_message('valid_date', 'La %s no es válida');
                      $this->form_validation->set_message('periodos', 'Los %s son requeridos');
                      //si el formulario no pasa la validación lo devolvemos a la página
                      //pero esta vez le mostramos los errores al lado de cada campo
                            if($this->form_validation->run() == FALSE)
                            {
                                    $this->index();
                            //en caso de que la validación sea correcta cogemos las variables y las envíamos
                            //al modelo
                            }else{
                                    $fechaCreacion = $this->input->post("fechaCreacion");
                                    $fechaResolucion = $this->input->post("fechaResolucion");
                                    $Nombre = $this ->input->post("nombre");
                                    $Estado = $this->input->post("estado");
                                    $Descripcion = $this->input->post("descripcion");
                                    $Caso_idAcuerdo = $this->input->post("caso_idAcuerdo");
                                    $insert = $this->acuerdo_model->insert_acuerdo($fechaCreacion,$fechaResolucion,$Nombre,$Estado,$Descripcion,$Caso_idAcuerdo);
                                    //si el modelo hace la inserción en la base de datos nos devolverá a la siguiente url
                                    //en la que según nuestro formulario debe mostrarse el mensaje de confirmación.
                                    //RUTA CAMBIA 
                                    redirect("abogadoAcuerdos");
                            }
                    }
                }


}		
?>