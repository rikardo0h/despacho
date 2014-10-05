<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Clientes secretaria</title>


    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet">
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
				<h4>Registrar cliente</h4>
				<br/>
				<form title="Cliente"  action="https://www.google.com/">
        		<h4>Datos cliente</h4>
        		<label for="nombre">Nombre	:</label>
        		<input type="text" id="nombre"><br/><br/>
		        <label for="direccion">Dirección	:</label>
        		<input type="text" id="direccion"><br/><br/>
		        <label for="telefono">Teléfono	:</label>
        		<input type="text" id="telefono"><br/><br/>
		        <label for="celular">Celular	:</label>
        		<input type="text" id="celular"><br/><br/>
        		<label for="correo">Correo electrónico	:</label>
        		<input type="text" id="correo"><br/><br/>
		        <label for="rfc">RFC	:</label>
        		<input type="text" id="rfc"><br/><br/>
		        <label for="tipo">Tipo de cliente:	</label>
				<input type="radio" name="activo" value="0">Persona Física
				<input type="radio" name="activo" value="1">Persona Moral
				<br><br>
		        <br/>	
		        <button>Agregar</button>
		        </form>

				
		    </div>
		  </div>
		</div>

		<div id="footer">
		  <div class="container"></div>
		</div>

	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>