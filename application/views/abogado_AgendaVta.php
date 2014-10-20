<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Agenda abogado</title>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>bower_components/bootstrap-calendar/css/calendar.css">
  <script type="text/javascript" src="<?php echo base_url() ?>bower_components/jquery/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>bower_components/bootstrap-calendar/js/language/es-ES.js"></script>

    <!-- Aqui empieza los metas originales -->
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
          <li class="active"><a href="<?php echo base_url().'agenda_controlador/abogadoAgenda';?>">Agenda</a></li>
          <li><a href="<?php echo base_url().'acuerdos_controlador/abogadoAcuerdos';?>">Acuerdos</a></li>
          <li><a href="<?php echo base_url().'seguimiento_controlador/abogadoSeguimientos';?>">Seguimientos</a></li>
          <li><a href="<?php echo base_url().'expediente_controlador/abogadoExpedientes';?>">Expedientes</a></li>
          <li><a href="<?php echo base_url().'cobros_controlador/abogadoCobros';?>">Cobro Clientes</a></li>
          <li><a href="<?php echo base_url().'auth/logout';?>">Cerrar Sesion</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
  <!-- Begin page content -->
  <!-- <div class="container">
    <div class="page-header">
      <br>  
      
      <nav class="navbar">
 
</nav > -->
<br>
<br>
<br>
<div class="container">
    <ol class="breadcrumb">
          <li><a href="<?php echo base_url() ?>agenda_controlador/abogadoAgenda">Calendario</a></li>
          <li><a href="<?php echo base_url() ?>events">Añadir evento</a></li>
      </ol>
    <div class="row">
      <div class="page-header">
        <div class="pull-right form-inline">
          <div class="btn-group">
            <button class="btn btn-primary" data-calendar-nav="prev"><< Anterior</button>
            <button class="btn" data-calendar-nav="today">Hoy</button>
            <button class="btn btn-primary" data-calendar-nav="next">Siguiente >></button>
          </div>
          <div class="btn-group">
            <button class="btn btn-warning" data-calendar-view="year">Año</button>
            <button class="btn btn-warning active" data-calendar-view="month">Mes</button>
            <button class="btn btn-warning" data-calendar-view="week">Semana</button>
            <button class="btn btn-warning" data-calendar-view="day">Día</button>
          </div>
        </div>
      </div>  
      <label class="checkbox">
        <input type="checkbox" value="#events-modal" id="events-in-modal"> Abrir eventos en una ventana modal
      </label>  
    </div><hr>
    <div class="row">
      <div id="calendar"></div>
    </div>

    <!--ventana modal para el calendario-->
    <div class="modal fade" id="events-modal">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
              </div>
            <div class="modal-body" style="height: 400px">
                <p>One fine body&hellip;</p>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div>
    
    <script src="<?php echo base_url() ?>bower_components/underscore/underscore-min.js"></script>
    <script src="<?php echo base_url() ?>bower_components/bootstrap-calendar/js/calendar.js"></script>
    <script type="text/javascript">
  (function($){
    //creamos la fecha actual
    var date = new Date();
    var yyyy = date.getFullYear().toString();
    var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
    var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();

    //establecemos los valores del calendario
    var options = {
      events_source: '<?php echo base_url() ?>events/getAll',
      view: 'month',
      language: 'es-ES',
      tmpl_path: '<?php echo base_url() ?>bower_components/bootstrap-calendar/tmpls/',
      tmpl_cache: false,
      day: yyyy+"-"+mm+"-"+dd,
      time_start: '8:00',
      time_end: '20:00',
      time_split: '30',
      width: '100%',
      onAfterEventsLoad: function(events) 
      {
        if(!events) 
        {
          return;
        }
        var list = $('#eventlist');
        list.html('');

        $.each(events, function(key, val) 
        {
          $(document.createElement('li'))
            .html('<a href="' + val.url + '">' + val.title + '</a>')
            .appendTo(list);
        });
      },
      onAfterViewLoad: function(view) 
      {
        $('.page-header h3').text(this.getTitle());
        $('.btn-group button').removeClass('active');
        $('button[data-calendar-view="' + view + '"]').addClass('active');
      },
      classes: {
        months: {
          general: 'label'
        }
      }
    };

    var calendar = $('#calendar').calendar(options);

    $('.btn-group button[data-calendar-nav]').each(function() 
    {
      var $this = $(this);
      $this.click(function() 
      {
        calendar.navigate($this.data('calendar-nav'));
      });
    });

    $('.btn-group button[data-calendar-view]').each(function() 
    {
      var $this = $(this);
      $this.click(function() 
      {
        calendar.view($this.data('calendar-view'));
      });
    });

    $('#first_day').change(function()
    {
      var value = $(this).val();
      value = value.length ? parseInt(value) : null;
      calendar.setOptions({first_day: value});
      calendar.view();
    });

    $('#events-in-modal').change(function()
    {
      var val = $(this).is(':checked') ? $(this).val() : null;
      calendar.setOptions(
        {
          modal: val,
          modal_type:'iframe'
        }
      );
    });
  }(jQuery));
    </script>
      





    <!-- </div>
    
  </div> -->
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

<!--portaluv documentos estatuto alumnos 2008 todas ordinario primera y promedio de 8.5 para arriba
HASTA PLANEACIONNN!!!!!
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->