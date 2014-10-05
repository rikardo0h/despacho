<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Pagos secretaria</title>


    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
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
		    <div class="page-header">
		      <br/>     
				<h3>Secretaria</h3>
				<h4>Pagos</h4>
		    </div>
		  </div>
		</div>

		<div id="footer">
		  <div class="container"></div>
		</div>

	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>