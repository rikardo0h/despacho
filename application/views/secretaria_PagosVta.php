<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Pagos secretaria</title>


    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/styles.css')?>" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <link rel="stylesheet">
    <script>
        $('#myTab a[href="#profile"]').tab('show') // Select tab by name
        $('#myTab a:first').tab('show') // Select first tab
        $('#myTab a:last').tab('show') // Select last tab
        $('#myTab li:eq(2) a').tab('show') // Select third tab (0-indexed)
    </script>


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
		   
				<h3>Secretaria</h3>
				<h4>Pagos</h4>
  <p class="text-right"><a href="<?php echo base_url().'pagos_controlador/nuevoPago';?>" class="btn btn-warning" >Nuevo Pago</a></p>
  <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#home" role="tab" data-toggle="tab">Telefono</a></li>
        <li><a href="#profile" role="tab" data-toggle="tab">Luz</a></li>
        <li><a href="#messages" role="tab" data-toggle="tab">Agua</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="home">

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
                    
                    <?php foreach ($pagos as $cli):?>
                      <?php if ($cli->concepto == 'Telefono'): ?>
                      <tr>
                      	<td>
                         <?php if ($cli->fecha_pag != NULL): ?>
                              <h4> <span class="label label-success">Pagado</span></h4>
                          <?php else: ?>
                              <h4> <span class="label label-warning">Pendiente</span></h4>
                          <?php endif; ?>


                        </td>
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
                        
                       <?php if ($cli->fecha_pag == NULL): ?>
                            <td>
                              <form  action="finPago" method="post"> 
                              <?=form_hidden('pagoid',$cli->idpago)?>
                              <input type="submit" class="btn btn-danger" value="PAGAR">
                            </form>
                          </td>
                          <?php endif; ?>
                        
                      <?php endif; ?>
                    <?php endforeach; ?>
                      </tbody>
                      </tr>
                    </table>
                    <br/>
        </div>
        <div class="tab-pane" id="profile">       

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
                     
                    <?php foreach ($pagos as $cli):?>
                    <?php if ($cli->concepto == 'Luz'): ?>
                      <tr>
                        <td>
                          <?php if ($cli->fecha_pag != NULL): ?>
                              <h4> <span class="label label-success">Pagado</span></h4>
                          <?php else: ?>
                              <h4> <span class="label label-warning">Pendiente</span></h4>
                          <?php endif; ?>
                        </td>
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
                        
                       <?php if ($cli->fecha_pag == NULL): ?>
                            <td>
                              <form  action="finPago" method="post"> 
                              <?=form_hidden('pagoid',$cli->idpago)?>
                              <input type="submit" class="btn btn-danger" value="PAGAR">
                            </form>
                          </td>
                          <?php endif; ?>
                        
                    <?php endif; ?>
                    <?php endforeach; ?>
                      </tbody>
                      </tr>
                    </table>
                    <br/>


        </div>
        <div class="tab-pane" id="messages">       

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
                    
                    <?php foreach ($pagos as $cli):?>
                      <?php if ($cli->concepto == 'Agua'): ?>
                        <tr>
                          <td>
                            <?php if ($cli->fecha_pag != NULL): ?>
                              <h4> <span class="label label-success">Pagado</span></h4>
                          <?php else: ?>
                              <h4> <span class="label label-warning">Pendiente</span></h4>
                          <?php endif; ?>
                          </td>
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
                          
                          <?php if ($cli->fecha_pag == NULL): ?>
                            <td>
                              <form  action="finPago" method="post"> 
                              <?=form_hidden('pagoid',$cli->idpago)?>
                              <input type="submit" class="btn btn-danger" value="PAGAR">
                            </form>
                          </td>
                          <?php endif; ?>
                           
                          
                          <?php endif; ?>
                    <?php endforeach; ?>
                      </tbody>
                      </tr>
                    </table>
                    <br/>

        </div>

		    </div>
		  </div>
		</div>

		<div id="footer">
		  <div class="container"></div>
		</div>

	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>