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
                <li class="active"><a href="<?php echo base_url().'casos_controlador/abogadoCasos';?>">Casos</a></li>
                <li><a href="<?php echo base_url().'cobros_controlador/abogadoCobros';?>">Seguimientos</a></li>
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

      <h3>Detalles de Acuerdos</h3>
      <h4>Documentos</h4>


        <table class='table table-hover'>
          <tbody>
          <tr>
          <th scope="col" colspan="2">ID DOC</th>
          <th scope="col" colspan="2">NOMBRE</th>
            <th scope="col"colspan="2">ESTADO</th>
            <th scope="col" colspan="2">FECHA CREACIÓN</th>
            <th scope="col" colspan="2">FECHA RESOLUCIÓN</th>
            <th scope="col"colspan="2">OPCIONES</th>
          </tr>
          <p class="text-right">
          <form  action="abogadoAcuerdos" method="post"> 
                  <?=form_hidden('caso',$caso)?>
                  <input type="submit" class="btn btn-success" value="Agregar acuerdo">
            </form>
          </p>
        <h1><? echo $caso ?></h1>

        <?php foreach ($acuerdos as $cli):?>
          <tr>
            <td><?= $cli->nombreAcuerdo; ?></td>
            <td></td>
            <td><?= $cli->descripcion; ?></td>
            <td></td>
            <td><?= $cli->estado; ?></td>
            <td></td>
            <td><?= $cli->fecha_crea; ?></td>
            <td></td>
             <td><?= $cli->fecha_resol; ?></td>
            <td></td>
            <td>
               <form  action="downloads" method="post"> 
                  <?=form_hidden('nombre',$cli->idacuerdo)?>
                  <input type="submit" class="btn btn-success" value="Resolución">
            </form>
            </td>
            <td>
               <form  action="eliminarFile" method="post"> 
                  <?=form_hidden('casoid',$cli->idacuerdo)?>
                  <input type="submit" class="btn btn-danger" value="Eliminar">
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

