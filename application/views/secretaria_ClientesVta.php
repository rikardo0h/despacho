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
				<h4>Clientes</h4>

				<table>
					<tbody>
					<tr>
					<th scope="col" colspan="2">Nombre</th>
			    	<th scope="col"colspan="2">Dirección</th>
			    	<th scope="col" colspan="2">Telefono</th>
			    	<th scope="col"colspan="2">Celular</th>
			    	<th scope="col">RFC</th>
					<th scope="col" colspan="5">Opciones</th>
					

					</tr>
					
				<?php foreach ($clientes as $cli):?>
					<tr>
						<td><?= $cli->nombre; ?></td>
						<td margin-right="5px"></td>
						<td><?= $cli->direccion; ?></td>
						<td></td>
						<?php if ($cli->telefono != ''): ?><td><?= $cli->telefono;?></td>
						<?php else : ?><td> No tiene </td><?php endif; ?>
						<td> </td>
						<?php if ($cli->celular != ''): ?><td><?= $cli->celular; ?></td>
						<?php else : ?><td> No tiene </td><?php endif; ?>
						<td> </td>
						<?php if ($cli->rfc != ''): ?><td><?= $cli->rfc; ?></td>
						<?php else : ?><td> No tiene </td><?php endif; ?>
						<td> </td>
						<td>
						<form  action="clientes_controller/modificaClientes" method="post"> 
						<?=form_hidden('cliente',$cli->idcliente)?>
						<input type="submit" value="Modificar">
						</form></td>
						<td>
						<form  action="clientes_controller/eliminaClientes" method="post"> 
						<?=form_hidden('cliente',$cli->idcliente)?>
						<input type="submit" value="Eliminar">
						</form></td>
				<?php endforeach; ?>
					</tbody>
					</tr>
				</table>
				<br/>
				<a href="<?php echo base_url().'clientes_controlador/crearClientes';?>">Nuevo cliente</a>
		    </div>
		  </div>
		</div>

		<div id="footer">
		  <div class="container"></div>
		</div>

	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>