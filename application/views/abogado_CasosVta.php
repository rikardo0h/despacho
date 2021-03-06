<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Casos abaogado</title>


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
                <li><a href="<?php echo base_url().'agenda_controlador/abogadoAgenda';?>">Agenda</a></li>
                <li class="active"><a href="<?php echo base_url().'casos_controlador/abogadoCasos';?>">Casos</a></li>
                <li><a href="<?php echo base_url().'cobros_controlador/abogadoCobros';?>">Seguimientos</a></li>
              <li><a href="<?php echo base_url().'auth/logout';?>">Cerrar Sesion</a></li>
            </ul>
          </div>
        </div>
      </div>
      
      
      <div class="container">
        <div class="page-header">
        <h1>Abogado</h1>
        <h2>Casos Actuales</h2>

        <table class='table table-hover'>
          <tbody>
          <tr>
          <th scope="col" colspan="2">Numero de caso</th>
            <th scope="col"colspan="2">NOMBRE CLIENTE </th>
            <th scope="col" colspan="2">FECHA</th>
            <th scope="col"colspan="2">ESTADO</th>
            <th scope="col">RESOLUCIÓN</th>
          <th scope="col" colspan="5">Opciones</th>
          <th scope="col" colspan="5"></th>
          
          </tr>
          <p class="text-right"><a href="<?php echo base_url().'casos_controlador/crearCaso';?>" class="btn btn-warning" >Nuevo Caso</a></p>
          <?php foreach ($casos as $cli):?>

          <?php if($cli->estado!="Ganado" && $cli->estado!="Perdido" && $cli->estado!="Cancelado" ) : ?>
                  <tr>
                    <td><?= $cli->numero; ?></td>
                    <td margin-right="5px"></td>
                    <td><?= $cli->nombre; ?></td>
                    <td></td>
                    <td><?= $cli->fecha; ?></td>
                    <td></td>
                    <td><?= $cli->estado; ?></td>
                    <td> </td>
                    <td><?= $cli->resolucion; ?></td>
                    
                     <td>
                       <form  action="verCaso" method="post"> 
                          <?=form_hidden('casoid',$cli->idcaso)?>
                          <input type="submit" class="btn btn-success" value="Ver Caso">
                        </form>
                    </td>
                    <td>
                        <form  action="resolucion" method="post"> 
                          <?=form_hidden('casoid',$cli->idcaso)?>
                          <input type="submit" class="btn btn-info" value="Terminar">
                        </form>
                    </td> 
                      <td>
                       <form  action="verAcuerdos" method="post"> 
                          <?=form_hidden('casoid',$cli->idcaso)?>
                          <input type="submit" class="btn btn-warning" value="Ver acuerdos">
                        </form>
                    </td> 
                    <td>
                       <form  action="cancelarCaso" method="post"> 
                          <?=form_hidden('casoid',$cli->idcaso)?>
                          <input type="submit" class="btn btn-danger" value="Cancelar">
                        </form>
                    </td>

              <?php endif; ?>

        <?php endforeach; ?>
          </tbody>
          </tr>
        </table>
        <br/>
        </div>
      </div>

    <div class="jumbotron">
        
        <h2>C A S O S    ____     T E R M I N A D O S</h2>

        <table class='table table-hover'>
          <tbody>
          <tr>
          <th scope="col" colspan="2">Numero de caso</th>
            <th scope="col"colspan="2">NOMBRE CLIENTE </th>
            <th scope="col" colspan="2">FECHA</th>
            <th scope="col"colspan="2">ESTADO</th>
            <th scope="col">RESOLUCIÓN</th>
          <th scope="col" colspan="5">Opciones</th>
      
          </tr>
        
          <?php foreach ($casos as $cli):?>

          <?php if($cli->estado=="Ganado" or $cli->estado=="Perdido") : ?>

                  <tr>
                    <td><?= $cli->numero; ?></td>
                    <td margin-right="5px"></td>
                    <td><?= $cli->nombre; ?></td>
                    <td></td>
                    <td><?= $cli->fecha; ?></td>
                    <td></td>
                    <td><?= $cli->estado; ?></td>
                    <td> </td>
                    <td><?= $cli->resolucion; ?></td>
                    
                     <td>
                       <form  action="verCaso" method="post"> 
                          <?=form_hidden('casoid',$cli->idcaso)?>
                          <input type="submit" class="btn btn-success" value="Ver Caso">
                        </form>
                    </td>
                      <td>
                       <form  action="verAcuerdos" method="post"> 
                          <?=form_hidden('casoid',$cli->idcaso)?>
                          <input type="submit" class="btn btn-warning" value="Ver acuerdos">
                        </form>
                    </td> 
                    <td>
                       <form  action="eliminarCasoGanado" method="post"> 
                          <?=form_hidden('casoid',$cli->idcaso)?>
                          <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                    </td>

              <?php endif; ?>

        <?php endforeach; ?>
          </tbody>
          </tr>
        </table>
        <br/>
        
      </div>

        <div class="page-header">
        <h4>Casos Cancelados</h4>

        <table class='table table-hover'>
          <tbody>
          <tr>
          <th scope="col" colspan="2">Numero de caso</th>
            <th scope="col"colspan="2">NOMBRE CLIENTE </th>
            <th scope="col" colspan="2">FECHA</th>
            <th scope="col"colspan="2">ESTADO</th>
            <th scope="col">RESOLUCIÓN</th>
          <th scope="col" colspan="5">Opciones</th>
          </tr>
        
          <?php foreach ($casos as $cli):?>

          <?php if($cli->estado=="Cancelado" ) : ?>

                  <tr>
                    <td><?= $cli->numero; ?></td>
                    <td margin-right="5px"></td>
                    <td><?= $cli->nombre; ?></td>
                    <td></td>
                    <td><?= $cli->fecha; ?></td>
                    <td></td>
                    <td><?= $cli->estado; ?></td>
                    <td> </td>
                    <td><?= $cli->resolucion; ?></td>
                    <td>
                       <form  action="eliminarCaso" method="post"> 
                          <?=form_hidden('casoid',$cli->idcaso)?>
                          <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                    </td>

              <?php endif; ?>

        <?php endforeach; ?>
          </tbody>
          </tr>
        </table>
        <br/>
        </div>
    </div>

    <div id="footer">
      <div class="container"></div>
    </div>

  <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>