<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Casos_controlador extends CI_Controller {

		public function __construct(){
			parent::__construct();
			//$this->load->model();

			//$this->load->library();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->helper('dropdown');
			$this->load->model('casos_modelo');
			$this->load->model('clientes_modelo');
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
			$this->load->library('ion_auth');
			$this->lang->load('auth');
		}
		
		public function abogadoCasos(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==2){
				$datos = array('casos' => $this->casos_modelo->obtenerCasos());
				$this->load->view('abogado_CasosVta',$datos);
			}
			
		}

		public function crearCaso(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==2){
				$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
				$this->load->helper('dropdown');
				$data['combo'] = listData('cliente','idcliente', 'nombre');
				$this->load->view('abogado_NuevoCasoVta',$data);
			}
		}

		 public function nuevo_Caso(){
                    //si se ha hecho submit en el formulario...
                    if(isset($_POST['acuerdoB']))
                    {
                    //creamos nuestras reglas de validación, 
                    //required=campo obligatorio
                      $this->form_validation->set_rules('fechaCreacion', 'Fecha de creacion', 'required|valid_date|xss_clean');
                      $this->form_validation->set_rules('numero', 'Numero', 'required|xss_clean');
                      $this->form_validation->set_rules('descripcion', 'Descripción', 'required|xss_clean');
                      
                      //comprobamos si los datos son correctos, el comodín %s nos mostrará el nombre del campo
                    //que ha fallado 
                      $this->form_validation->set_message('required', 'El  %s es requerido');
                      $this->form_validation->set_message('valid_date', 'La %s no es válida');
                      $this->form_validation->set_message('periodos', 'Los %s son requeridos');
                      //si el formulario no pasa la validación lo devolvemos a la página
                      //pero esta vez le mostramos los errores al lado de cada campo
                            if($this->form_validation->run() == FALSE)
                            {
                                    $this->load->view('abogado_NuevoCasoVta');
                            //en caso de que la validación sea correcta cogemos las variables y las envíamos
                            //al modelo
                            }else{
                                    $fechaCreacion = $this->input->post("fechaCreacion");
                                    $numero = $this ->input->post("numero");
                                    $Descripcion = $this->input->post("descripcion");
                                    $cliente = $this->input->post("cliente");
                                    $insert = $this->casos_modelo->nuevo_Caso($fechaCreacion,$numero,$Descripcion);
                                    //si el modelo hace la inserción en la base de datos nos devolverá a la siguiente url
                                    //en la que según nuestro formulario debe mostrarse el mensaje de confirmación.
                                    //RUTA CAMBIA 
                                    redirect("casos_controlador/abogadoCasos");
                            }
                    }
                }


		public function eliminarCaso(){
				$data['usuario'] = $this->session->userdata['rol'];
				if ($data['usuario']==2){
					$this->casos_modelo->borrarCaso($this->input->post('casoid'));
					$this->abogadoCasos();
				}
		}


		public function verCaso(){
			$data['usuario'] = $this->session->userdata['rol'];
			$this->session->set_userdata('aux', $this->input->post('casoid'));
			$this->session->set_flashdata('temp',$this->input->post('casoid'));
			if ($data['usuario']==2){
				redirect('expediente_controlador/detalleExpediente');
			}
			if ($data['usuario']==4){
				redirect('expediente_controlador/detalleExpediente');
			}
		}

		////

		public function auxiliarCasos(){
			$data['usuario'] = $this->session->userdata['rol'];
			if ($data['usuario']==4){
				$this->load->view('auxiliar_CasosVta');
			}
		}

		public function verAcuerdos(){
				$data['usuario'] = $this->session->userdata['rol'];
				if ($data['usuario']==2){
					$this->session->set_userdata('tAc', $this->input->post('casoid'));
					redirect('acuerdos_controlador/detalleAcuerdos');
				}
		}

		public function resolucion(){
				$data['usuario'] = $this->session->userdata['rol'];
				if ($data['usuario']==2){
					$data['info'] = $this->casos_modelo->detalleCaso($this->input->post('casoid'));
					$this->load->view('abogado_CasosResolucionVta',$data);
				}
		}

		public function actualizar_caso(){
				$resolucion = $this->input->post("resolucion");
                $estado = $this->input->post("estado");
                $id = $this->input->post("idCaso");
                $this->casos_modelo->actualizar_Detalle($id,$estado,$resolucion);
                redirect("casos_controlador/abogadoCasos");
		}


		public function cancelarCaso(){
				$data['usuario'] = $this->session->userdata['rol'];
				if ($data['usuario']==2){
					$this->casos_modelo->cancelarCaso($this->input->post('casoid'));
					$this->abogadoCasos();
				}
		}

		public function eliminarCasoGanado(){
				$data['usuario'] = $this->session->userdata['rol'];
				if ($data['usuario']==2){
					$this->casos_modelo->borrarCasoCompleto($this->input->post('casoid'));
					$this->abogadoCasos();
				}
		}






}
?>