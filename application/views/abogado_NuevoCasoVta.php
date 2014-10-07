<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Casos Abogado</title>


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
				


						 <h1>"Crear caso"</h1>
						<p>"Por favor, introduce la información del caso"</p>

						<div id="infoMessage"><?php echo $message;?></div>

						<?php echo form_open("casos_controlador/crearCaso");?>

						      <p>
						            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
						            <?php echo form_input($first_name);?>
						      </p>

						      <p>
						            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
						            <?php echo form_input($last_name);?>
						      </p>

						      <p>
						            <?php echo lang('create_user_company_label', 'company');?> <br />
						            <?php echo form_input($company);?>
						      </p>

						      <p>
						            <?php echo lang('create_user_email_label', 'email');?> <br />
						            <?php echo form_input($email);?>
						      </p>

						      <p>
						            <?php echo lang('create_user_phone_label', 'phone');?> <br />
						            <?php echo form_input($phone);?>
						      </p>

						      <p>
						            <?php echo lang('create_user_password_label', 'password');?> <br />
						            <?php echo form_input($password);?>
						      </p>

						      <p>
						            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
						            <?php echo form_input($password_confirm);?>
						      </p>


						      <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

						<?php echo form_close();?>

				
		    </div>
		  </div>
		</div>

		<div id="footer">
		  <div class="container"></div>
		</div>

	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>