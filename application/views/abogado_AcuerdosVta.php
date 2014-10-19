    <!DOCTYPE html>
<html lang="en">
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
    
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
<!-- Wrap all page content here -->
<div id="wrap">
  
  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Despacho Jurídico</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url().'agenda_controlador/abogadoAgenda';?>">Agenda</a></li>
          <li class="active"><a href="<?php echo base_url().'acuerdos_controlador/abogadoAcuerdos';?>">Acuerdos</a></li>
          <li><a href="<?php echo base_url().'seguimiento_controlador/abogadoSeguimientos';?>">Seguimientos</a></li>
          <li><a href="<?php echo base_url().'expediente_controlador/abogadoExpedientes';?>">Expedientes</a></li>
          <li><a href="<?php echo base_url().'cobros_controlador/abogadoCobros';?>">Cobro Clientes</a></li>
          <li><a href="<?php echo base_url().'auth/logout';?>">Cerrar Sesion</a></li>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
  <!-- Begin page content -->
  <div class="container">
    <div class="page-header">
      <br>  
      
      <nav class="navbar">
 
</nav >
<h3>Administrador</h3>
<h4>Acuerdos</h4>
<h1><? echo $caso ?></h1>
      
<fieldset>
    <form title="acuerdo" id="formularioAcuerdo"  action="nuevo_acuerdo" method="post" >
                    <h1>Nuevo Acuerdo</h1>                    
                    <div class="formu"><label>Nombre:</label><input type="text" id="acuerdos" class="campo" name="nombre" value="<?php echo set_value('nombre'); ?>" /><?php echo form_error('nombre', '<span class="error">', '</span>'); ?></div>
                    <div class="formu"><label>Fecha de creación:</label><input type="text" id="datepicker" class="campo" name="fechaCreacion" value="<?php echo set_value('fechaCreacion'); ?>" /><?php echo form_error('fechaCreacion', '<span class="error">', '</span>'); ?></div>
                    <div class="formu"><label>Fecha de resolución:</label><input type="text" id="datepicker2" class="campo" name="fechaResolucion" value="<?php echo set_value('fechaResolucion'); ?>" /><?php echo form_error('fechaResolucion', '<span class="error">', '</span>'); ?></div>
                    <div class="formu"><label>Estado:</label><input type="text" class="campo" name="estado" value="<?php echo set_value('estado'); ?>" /><?php echo form_error('estado', '<span class="error">', '</span>'); ?></div>
                    <div class="formu"><label>Descripción:</label><textarea name="descripcion" rows="5" cols="40" value="<?php echo set_value('descripcion'); ?>" ></textarea><?php echo form_error('descripcion', '<span class="error">', '</span>'); ?></div>
                    <input type="hidden" name="caso" value="<?php echo $caso ?>"/>
                    <input type="hidden" name="acuerdoB"/>
                    <button id="acuerdoB">Guardar</button>
    </form>

    </form>
  </fieldset>

    </div>
    
  </div>
</div>

<div id="footer">
  <div class="container">
  
  </div>
</div>

  <!-- script references -->
  <!--  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>

<!--portaluv documentos estatuto alumnos 2008 todas ordinario primera y promedio de 8.5 para arriba
HASTA PLANEACIONNN!!!!!
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->