<!DOCTYPE html>
<html>
  <head>
     <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Acuerdos abogado</title>


    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <link rel="stylesheet">
    <script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
    $(function() {
        $( "#datepicker2" ).datepicker();
    });
    $(function() {
                var availableTags = [
                  "ActionScript",
                  "AppleScript",
                  "Asp",
                  "BASIC",
                  "C",
                  "C++",
                  "Clojure",
                  "COBOL",
                  "ColdFusion",
                  "Erlang",
                  "Fortran",
                  "Groovy",
                  "Haskell",
                  "Java",
                  "JavaScript",
                  "Lisp",
                  "Perl",
                  "PHP",
                  "Python",
                  "Ruby",
                  "Scala",
                  "Scheme"
                ];
                $( "#acuerdos" ).autocomplete({
                  source: availableTags
                });
                });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.combobox').combobox({bsVersion: '3'});
      });
    </script>

    
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
  </head>
  </head>
  <body>
    <div id="wrap">
      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand">Despacho Jurídico</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url().'agenda_controlador/secretariaAgendas';?>">Agenda</a></li>
              <li class="active"><a href="<?php echo base_url().'clientes_controlador/secretariaClientes';?>">Clientes</a></li>
              <li><a href="<?php echo base_url().'pagos_controlador/secretariaPagos';?>">Pagos</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container">
        <br>        <br>
        
        <div class="jumbotron">
        <fieldset>
        <form title="acuerdo" id="formularioAcuerdo"  action="actualizar_caso" method="post" >
                    <h1>Finalizar Caso</h1>                    
                    <div class="formu">
                      <label>Numero:</label>
                      <h3> <?echo $info->numero;?></h3>
                    </div>
                    <div>
                        <label>Cliente:</label>
                        <h3> VA EL NOMBRE DEL CLINETE</h3>
                    </div>
                    <div class="formu">
                      <label>Fecha de creación:</label>
                       <h3> <?echo $info->fecha; ?></h3>
                   </div>

                    <div class="form-group">
                          <label class="col-lg-2 control-label">Radios</label>
                          <div class="col-lg-10">
                            <div class="radio">
                              <label>
                                <input type="radio" name="estado" id="optionsRadios1" value="Ganado" checked="">
                                Ganado
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="estado" id="optionsRadios2" value="Perdido">
                                Perdido
                              </label>
                            </div>
                             <div class="radio">
                              <label>
                                <input type="radio" name="estado" id="optionsRadios2" value="Sin respuesta">
                                Sin respuesta
                              </label>
                            </div>
                          </div>
                      </div>


                    <div class="formu">
                      <label>Resolución:</label>
                      <textarea name="resolucion" class="form-control" rows="5" cols="40" value="<?php echo set_value('resolucion'); ?>" >
                      <?echo $info->resolucion; ?>
                     </textarea>
                      <?php echo form_error('resolucion', '<span class="error">', '</span>'); ?></div>
                    <input type="hidden" name="idCaso" value= "<?echo $info->idcaso; ?>"/>
                    <BR>
                    <button class="btn btn-success" id="acuerdoB">Guardar</button>
          </form>
        </fieldset>
       </div>



      </div>
    </div>

    <div id="footer">
      <div class="container"></div>
    </div>

  <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>