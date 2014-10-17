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
		          <li><a href="<?php echo base_url().'clientes_controlador/secretariaClientes';?>">Clientes</a></li>
		          <li class="active"><a href="<?php echo base_url().'pagos_controlador/secretariaPagos';?>">Pagos</a></li>
		          <li><a href="<?php echo base_url().'auth/logout';?>">Cerrar Sesion</a></li>
		        </ul>
		      </div>
		    </div>
		  </div>
		  
		  
		  <div class="container">
		    <div class="page-header">
		      <br/>     
				<h3>Secretaria</h3>
				<h4>Pagos</h4>


 <table class='table table-hover'>
          <tbody>
          <tr>
          <th scope="col" colspan="2">ESTADO</th>
          <th scope="col" colspan="2">Concepto</th>
            <th scope="col"colspan="2">Descripcion </th>
            <th scope="col" colspan="2">Cantidad</th>
            <th scope="col"colspan="2">Fecha inicio</th>
            <th scope="col">Fecha limite</th>
          <th scope="col" colspan="5">Opciones</th>
          

          </tr>
          <p class="text-right"><a href="<?php echo base_url().'casos_controlador/crearCaso';?>" class="btn btn-warning" >Nuevo Pago</a></p>
        <?php foreach ($pagos as $cli):?>
          <tr>
          	<td>estado</td>
          	<td></td>
            <td><?= $cli->concepto; ?></td>
            <td margin-right="5px"></td>
            <td><?= $cli->descripcion; ?></td>
            <td></td>
            <td><?= $cli->cantidad; ?></td>
            <td></td>
            <td><?= $cli->fecha_lim; ?></td>
            <td> </td>
            <td><?= $cli->fecha_pag; ?></td>
            
             <td>
               <form  action="pagar" method="post"> 
                  <?=form_hidden('casoid',$cli->idpago)?>
                  <input type="submit" class="btn btn-danger" value="PAGAR">
                </form>
            </td>
            

        <?php endforeach; ?>
          </tbody>
          </tr>
        </table>
        <br/>
       


		    </div>
		  </div>
		</div>

		<div id="footer">
		  <div class="container"></div>
		</div>

	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>