<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Detalle Acuerdos</title>


    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
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
          <li><a href="<?php echo base_url().'acuerdos_controlador/abogadoAcuerdos';?>">Acuerdos</a></li>
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
      <br>
      <ul class="pager">
          <li class="previous"><a href="<?php echo base_url().'casos_controlador/abogadoCasos';?>">&larr; Volver</a></li>
      </ul>

      <h3>Seguimiento de clientes</h3>
      <h4>Cobros , avance , casos </h4>
       <center><h2><?echo $cliente->nombre."      RFC:   ".$cliente->rfc."    "?>

          <?php if ($cliente->tipo != '1'): ?>
                <? echo "Persona Fisica";?></td>
          <?php else : ?>
            <?echo "Persona Moral"?>
          <?php endif; ?>

       </h2></center>

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#home" role="tab" data-toggle="tab">Datos personales</a></li>
        <li><a href="#profile" role="tab" data-toggle="tab">Casos relacionados</a></li>
        <li><a href="#messages" role="tab" data-toggle="tab">Cobros y pagos</a></li>
        <li><a href="#settings" role="tab" data-toggle="tab">Documentos</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="home">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Nombre</h3>
                </div>
                <div class="panel-body">
                  <? echo $cliente->nombre?>
                </div>
              </div>


              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Direccion</h3>
                </div>
                <div class="panel-body">
                  <? echo $cliente->direccion?>
                </div>
              </div>


              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Telefonos</h3>
                </div>
                <div class="panel-body">
                  <? echo $cliente->telefono?>
                  <br>
                  <? echo $cliente->celular?>
                </div>
              </div>

              <div class="panel panel-warning">
                <div class="panel-heading">
                  <h3 class="panel-title">Correo</h3>
                </div>
                <div class="panel-body">
                  <? echo $cliente->correo?>
                </div>
              </div>

        </div>


        <div class="tab-pane" id="profile">
            <div class="list-group">

                <?php foreach ($casosCliente as $cliente):?>
                    <a href="#" class="list-group-item ">
                    <h4 class="list-group-item-heading">Caso número: <?echo $cliente->numero?></h4>
                    <p class="list-group-item-text">
                      Estado del caso: <?echo $cliente->estado?> <br>
                      Fecha de creación: <?echo $cliente->fecha?> <br>
                      Resolución del caso: <?echo $cliente->resolucion?>
                      
                        <?php if ($cliente->estado == 'Abierto'): ?>
                            <h3> <span class="label label-info">El caso continua en proceso</span></h3>
                        <? elseif ($cliente->estado == 'Perdido'): ?>
                            <h3> <span class="label label-danger">El caso se ha perdido </span></h3>
                        <? elseif ($cliente->estado == 'success'): ?>
                            <h3> <span class="label label-info">El caso se ha concluido correctamente</span></h3>
                        <? elseif ($cliente->estado == 'warning'): ?>
                           <h3> <span class="label label-info">El caso fue cancelado</span></h3>
                        <?php endif; ?>

                    </p>
                    </a>
                <?php endforeach; ?>
          </div>

        </div>
        <div class="tab-pane" id="messages">
          
            <div class="list-group">

                <?php foreach ($casosCliente as $cliente):?>
                    <a  class="list-group-item ">
                    <h4 class="list-group-item-heading">Caso número: <?echo $cliente->numero?></h4>
                    <p class="list-group-item-text">
                      Estado del caso: <?echo $cliente->estado?> <br>
                      Fecha de creación: <?echo $cliente->fecha?> <br>
                     
                      <?php if ($cliente->pagado >= $cliente->costo): ?>
                            <h3> <span class="label label-success">Se han cubierto todos los gastos</span></h3>
                        <? else: ?>
                            <h4>Pagado $<span class="label label-warning"><?echo $cliente->pagado?></span> ... Por pagar $<span class="label label-warning"><?echo $cliente->costo - $cliente->pagado ?></span></h4>
                           <form  action="pagar" method="post"> 
                                <?=form_hidden('casoid',$cliente->idcaso)?>
                                <input type="number" id="valor" name="valor" min="0" step="1" data-bind="value:replyNumber" />
                                <input type="submit" class="btn btn-danger btn-xs"  value="Hacer pago">
                            </form>
                                             
                      <?php endif; ?>
                          


                      
                      
                    </p>
                    </a>
                <?php endforeach; ?>
          </div>



        </div>
        <div class="tab-pane" id="settings">...</div>
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





</body>
</html>

