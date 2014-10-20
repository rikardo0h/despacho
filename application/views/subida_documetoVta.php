<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Detalle Expediente</title>


    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
          <span class="icon-bar">hola</span>
          <span class="icon-bar">hola</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Despacho Jurídico</a>
      </div>      
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url().'agenda_controlador/abogadoAgenda';?>">Agenda</a></li>
          <li><a href="<?php echo base_url().'casos_controlador/abogadoCasos';?>">Casos</a></li>
          <li><a href="<?php echo base_url().'seguimiento_controlador/abogadoSeguimientos';?>">Seguimientos</a></li>
          <li class="active"><a href="<?php echo base_url().'expediente_controlador/abogadoExpedientes';?>">Expedientes</a></li>
          <li><a href="<?php echo base_url().'cobros_controlador/abogadoCobros';?>">Cobro Clientes</a></li>
          <li><a href="<?php echo base_url().'auth/logout';?>">Cerrar Sesion</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
  <!-- Begin page content -->
  <div class="container">
    <div class="page-header">      
      <nav class="navbar">
        <br>
      <ul class="pager">
          <li class="previous"><a href="<?php echo base_url().'expediente_controlador/detalleExpediente';?>">&larr; Volver</a></li>
      </ul>

      </nav >

	  	<div class="panel panel-default">
	  <div class="panel-body">
	   

			<div class="row">
		  		<div class="col-md-9">
		        	<h2><?echo("SUBIDA DE DOCUMENTOS");?></h2>	                                        
			    <div class="row">
			    	<div class="col-md-6">
			        	<?=heading('Seleccione el archivo a subir', 3);?>
						<?=$error;?>
						<?=form_open_multipart('expediente_controlador/do_upload');?>
						<input type="file" name="userfile" size="30" class="btn btn-success" />
						<br/>
			      	</div>
			     <div class="col-md-6">
                <h5>Nombre</h5>
                <input type="text" name="nombre" / >
			        	<h5>Descripcion</h5>
                <br>
                <input type="text" class="form-control" rows="3" name="descrip"  / >
						    <input type="submit" value="Subir Archivo" class="btn btn-warning"/>
						<?=form_close()?>
			      </div>
			    </div>
			  </div>
			</div>

	 	<h5><?=br(1).anchor('files/info', 'Consulta todo el material'); ?></h5>
	  </div>
	</div>

			
		
		

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


<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/agency.css')?>" rel="stylesheet">
</head>
<body>



