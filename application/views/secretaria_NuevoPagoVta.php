    <!DOCTYPE html>
<html>
  <head>
     <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Secretaria pagos</title>


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
        <form title="acuerdo" id="formularioAcuerdo"  action="crearPago" method="post" >
                    <h3>Nuevo pago</h3>                    
                    <div class="form-group">
                          <label class="col-lg-2 control-label">Concepto</label>
                          <div class="col-lg-10">
                            <div class="radio">
                              <label>
                                <input type="radio" name="estado" id="optionsRadios1" value="Agua" checked="">
                                Agua
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="estado" id="optionsRadios2" value="Luz">
                                Luz
                              </label>
                            </div>
                             <div class="radio">
                              <label>
                                <input type="radio" name="estado" id="optionsRadios2" value="Telefono">
                                Telefono
                              </label>
                            </div>
                          </div>
                      </div>

                      <div class="formu"><label>Fecha limite:</label>
                        <input type="text" id="datepicker" class="form-control" name="fechaCreacion" value="<?php echo set_value('fechaCreacion'); ?>" />
                        <?php echo form_error('fechaCreacion', '<span class="error">', '</span>'); ?>
                      </div>
                    
                    <div class="formu">
                      <label>Cantidad</label>
                      <input type="number" id="valor" class="form-control" name="valor" min="0" step="1" data-bind="value:replyNumber" />
                    </div>

                    <div class="formu">
                      <label>Descripción:</label>
                      <textarea name="descripcion" class="form-control" rows="5" cols="40" value="<?php echo set_value('descripcion'); ?>" >
                      
                     </textarea>
                      <?php echo form_error('descripcion', '<span class="error">', '</span>'); ?></div>
                    <input type="hidden" name="idCaso"/>
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