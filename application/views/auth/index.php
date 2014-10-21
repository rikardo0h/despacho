<!DOCTYPE html>
<html >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>AdmonDespacho</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="<?= base_url('css/styles.css')?>" rel="stylesheet">
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
        <a class="navbar-brand" href="#">Despacho</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url().'auth/logout';?>">Cerrar Sesion</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
  <!-- Begin page content -->
  <div class="container">
    <div class="page-header">
      <br>  
        
        <h2 class="section-heading">Usuarios</h2>
        <br> 
        <br> 
        <div id="infoMessage"></div>

      <table class='table table-hover' cellpadding=20 cellspacing=20>
        <tr>
          <th><?php echo lang('index_fname_th');?></th>
          <th><?php echo lang('index_lname_th');?></th>
          <th><?php echo lang('index_email_th');?></th>
          <th><?php echo lang('index_groups_th');?></th>
          <th><?php echo lang('index_status_th');?></th>
          <th><?php echo lang('index_action_th');?></th>
          <th><?php ;?></th>

        </tr>
        <?php foreach ($users as $user):?>
          <tr>
            <td><?php echo $user->first_name;?></td>
            <td><?php echo $user->last_name;?></td>
            <td><?php echo $user->email;?></td>
            <td>
              <?php foreach ($user->groups as $group):?>  

                    <?php if ($group->name == "admin"): ?>
                        <a  class="btn btn-danger"> <?php echo($group->name) ?> </a>
                    <?php elseif ($group->name == "Abogado"): ?>
                        <a  class="btn btn-warning"> <?php echo($group->name) ?> </a>
                    <?php elseif ($group->name == "Secretaria"): ?>
                        <a  class="btn btn-success"> <?php echo($group->name) ?> </a>
                    <?php else: ?>
                        <a  class="btn btn-info"> <?php echo($group->name) ?> </a>
                  <?php endif ?>
               
               <?php endforeach?>
            </td>
            <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
            
      

            <td> <a href="<?php echo base_url()."auth/edit_user/".$user->id; ?>" class="btn btn-info"> Editar </a></td>
            <td> <a href="<?php echo base_url()."auth/eliminar_usuario/".$user->id; ?>" class="btn btn-warning"> Eliminar </a></td>

          </tr>
        <?php endforeach;?>
      </table>
      <br>
      <p><a href="<?php echo base_url()."index.php/auth/create_user"; ?>" class="btn btn-danger"> Crear Usuario </a></p>


                </div>
                

    </div>
    
  </div>
</div>

<div id="footer">
  <div class="container">
  
  </div>
</div>

  <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="despacho/assets/js/bootstrap.min.js"></script>
  </body>
</html>