<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Cobros Abogado</title>

    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <link href="css/styles.css" rel="stylesheet">
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
                <li><a href="<?php echo base_url().'casos_controlador/abogadoCasos';?>">Casos</a></li>
                <li class="active"><a href="<?php echo base_url().'cobros_controlador/abogadoCobros';?>">Seguimientos</a></li>
              <li><a href="<?php echo base_url().'auth/logout';?>">Cerrar Sesion</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
  <!-- Begin page content -->
  <div class="container">
    <div class="page-header">
      <br>  
      
     

      <h3>Administrador</h3>
      <h4>Cobros a clientes</h4>

      <table class='table table-hover'>
          <tbody>
          <tr>
          <th scope="col" colspan="2">NOMBRE</th>
            <th scope="col"colspan="2">TELEFONO </th>
            <th scope="col" colspan="2">CORREO</th>
            <th scope="col"colspan="2">RFC</th>
            <th scope="col">TIPO</th>
          <th scope="col" colspan="5">Opciones</th>
          
          
          </tr>
          <p class="text-right"><a href="<?php echo base_url().'casos_controlador/crearCaso';?>" class="btn btn-warning" >Nuevo Caso</a></p>
          <?php foreach ($clientes as $cli):?>
         
                  <tr>
                    <td><?= $cli->nombre; ?></td>
                    <td margin-right="5px"></td>
                    <td><?= $cli->telefono; ?></td>
                    <td></td>
                    <td><?= $cli->correo; ?></td>
                    <td></td>
                    <td><?= $cli->rfc; ?></td>
                    <td> </td>
                    <td>
                      <?php if ($cli->tipo != '1'): ?>
                            <? echo "Persona Fisica";?></td>
                      <?php else : ?>
                        <?echo "Persona Moral"?>
                      <?php endif; ?>
                    </td>
            
                     <td>
                       <form  action="detallePago" method="post"> 
                          <?=form_hidden('clienteid',$cli->idcliente)?>
                          <input type="submit" class="btn btn-success" value="Detalles">
                        </form>
                    </td>
                    



        <?php endforeach; ?>
          </tbody>
          </tr>
        </table>
  
          
         
     

    
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

  