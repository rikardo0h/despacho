<meta charset="utf-8">

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Edit</title>
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
        <a class="navbar-brand" href="<?php echo base_url('auth/'); ?>">Atras</a>
      </div>
      
    </div>
  </div>
  
  <!-- Begin page content -->
  <div class="container">
    <div class="page-header">
      <br>  
      
			<h1><?php echo lang('deactivate_heading');?></h1>
			<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

			<?php echo form_open("auth/deactivate/".$user->id);?>

			  <p>
			  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
			    <input type="radio" name="confirm" value="yes" checked="checked" />
			    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
			    <input type="radio" name="confirm" value="no" />
			  </p>

			  <?php echo form_hidden($csrf); ?>
			  <?php echo form_hidden(array('id'=>$user->id)); ?>

			  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

			<?php echo form_close();?>

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

