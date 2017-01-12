<?php
//require_once "../app/routes/login.php";
require_once "../app/data/user.php";
require_once "../app/data/class.permisos.php";
require_once "../app/data/class.generamenu.php";

$user = new user($_SESSION['id']);
$user->getData();

$obj_permiso = new Permiso();
$permiso = $obj_permiso->validarPermiso($user->id,6);

if( $permiso->agregar == 1){
    echo 'Tiene permisos';
}
else
{
    echo 'No Tiene permisos';
}
$obj_permiso->desconectar();





?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Movilidades MSP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="styles/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="styles/modal.css">
  <link rel="stylesheet" href="styles/skin-blue-light.min.css">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M.</b>MS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MSP</b>Movilidades</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


          <!-- Messages: style can be found in dropdown.less-->
          <!--<li class="dropdown messages-menu">-->
          <!--&lt;!&ndash; Menu toggle button &ndash;&gt;-->
          <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
          <!--<i class="fa fa-envelope-o"></i>-->
          <!--<span class="label label-success">4</span>-->
          <!--</a>-->
          <!--<ul class="dropdown-menu">-->
          <!--<li class="header">You have 4 messages</li>-->
          <!--<li>-->
          <!--&lt;!&ndash; inner menu: contains the messages &ndash;&gt;-->
          <!--<ul class="menu">-->
          <!--<li>&lt;!&ndash; start message &ndash;&gt;-->
          <!--<a href="#">-->
          <!--<div class="pull-left">-->
          <!--&lt;!&ndash; User Image &ndash;&gt;-->
          <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
          <!--</div>-->
          <!--&lt;!&ndash; Message title and timestamp &ndash;&gt;-->
          <!--<h4>-->
          <!--Support Team-->
          <!--<small><i class="fa fa-clock-o"></i> 5 mins</small>-->
          <!--</h4>-->
          <!--&lt;!&ndash; The message &ndash;&gt;-->
          <!--<p>Why not buy a new awesome theme?</p>-->
          <!--</a>-->
          <!--</li>-->
          <!--&lt;!&ndash; end message &ndash;&gt;-->
          <!--</ul>-->
          <!--&lt;!&ndash; /.menu &ndash;&gt;-->
          <!--</li>-->
          <!--<li class="footer"><a href="#">See All Messages</a></li>-->
          <!--</ul>-->
          <!--</li>-->
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">1</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Alertas de conductores</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-exclamation"></i> [CDT 445] Excede velocidad !
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todos</a></li>
            </ul>
          </li>
          <!--Tasks Menu-->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">2</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Alertas de vencimientos</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        <p>[CHT 353] Documentación vencida</p>

                        <!--<small class="pull-right">20%</small>-->
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <!--<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                        <!--<span class="sr-only">20% Complete</span>-->
                        <!--</div>-->
                      </div>
                    </a>

                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>

                        <p>[EFV 233] Mantenimiento vencido</p>
                        <!--<small class="pull-right">20%</small>-->
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <!--<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">-->
                        <!--<span class="sr-only">20% Complete</span>-->
                        <!--</div>-->
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">Ver todos</a>
              </li>
            </ul>
          </li>
<!--           User Account Menu -->
          <li class="dropdown user user-menu">
<!--          &lt;!&ndash; Menu Toggle Button &ndash;&gt;-->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<!--          &lt;!&ndash; The user image in the navbar&ndash;&gt;-->
<!--          <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
<!--          &lt;!&ndash; hidden-xs hides the username on small devices so only the image appears. &ndash;&gt;-->
          <span class="hidden-xs">
<!--            nombre de usuario--------------------------------------------------------------------------------------  -->
            <?php


            echo $user->name;

            //para debug
            //session_destroy();


            ?>

          </span>
          </a>
            <ul class="dropdown-menu">
              <li class="user-body">
                <a href="#" >Terminar sesión</a>
              </li>
            </ul>
<!--          <ul class="dropdown-menu">-->
<!--          &lt;!&ndash; The user image in the menu &ndash;&gt;-->
<!--          <li class="user-header">-->
<!--          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->

          <!--<p>-->
          <!--Alexander Pierce - Web Developer-->
          <!--<small>Member since Nov. 2012</small>-->
          <!--</p>-->
          <!--</li>-->
          <!--&lt;!&ndash; Menu Body &ndash;&gt;-->
          <!--<li class="user-body">-->
          <!--<div class="row">-->
          <!--<div class="col-xs-4 text-center">-->
          <!--<a href="#">Followers</a>-->
          <!--</div>-->
          <!--<div class="col-xs-4 text-center">-->
          <!--<a href="#">Sales</a>-->
          <!--</div>-->
          <!--<div class="col-xs-4 text-center">-->
          <!--<a href="#">Friends</a>-->
          <!--</div>-->
          <!--</div>-->
          <!--&lt;!&ndash; /.row &ndash;&gt;-->
          <!--</li>-->
          <!--&lt;!&ndash; Menu Footer&ndash;&gt;-->
          <!--<li class="user-footer">-->
          <!--<div class="pull-left">-->
          <!--<a href="#" class="btn btn-default btn-flat">Profile</a>-->
          <!--</div>-->
          <!--<div class="pull-right">-->
          <!--<a href="#" class="btn btn-default btn-flat">Sign out</a>-->
          <!--</div>-->
          <!--</li>-->
          <!--</ul>-->
          <!--</li>-->
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <!--<div class="user-panel">-->
      <!--<div class="pull-left image">-->
      <!--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">-->
      <!--</div>-->
      <!--<div class="pull-left info">-->
      <!--<p>Alexander Pierce</p>-->
      <!--&lt;!&ndash; Status &ndash;&gt;-->
      <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
      <!--</div>-->
      <!--</div>-->

      <!--&lt;!&ndash; search form (Optional) &ndash;&gt;-->
      <!--<form action="#" method="get" class="sidebar-form">-->
      <!--<div class="input-group">-->
      <!--<input type="text" name="q" class="form-control" placeholder="Search...">-->
      <!--<span class="input-group-btn">-->
      <!--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>-->
      <!--</button>-->
      <!--</span>-->
      <!--</div>-->
      <!--</form>-->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
        <?php
        /*Genero Menu Segun usuario*/
        $obj_menu = new Menu();
        $obj_menu->GeneraMenu(0,1,$user->id);
        $obj_menu->desconectar();
        ?>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubicación
        <small>Moviles en el mapa</small>
      </h1>


      <!--<ol class="breadcrumb">-->
      <!--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>-->
      <!--<li class="active">Here</li>-->
      <!--</ol>-->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <div id="map" class="col-lg-12"></div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!--<div class="pull-right hidden-xs">-->
    <!--Anything you want-->
    <!--</div>-->
    <!-- Default to the left -->
    <strong>División Informática del Ministerio de Salud &copy; 2016.</strong> Todos los derechos reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      <!--<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>-->
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Cuenta</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-cog"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Configuración general</h4>
              </div>
            </a>
          </li>
        </ul>

        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-exclamation"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cerrar sesión</h4>
              </div>
            </a>
          </li>
        </ul>

        <div class="btn"></div>
        <!-- /.control-sidebar-menu -->



        <!--<h3 class="control-sidebar-heading">Cerrar sesión</h3>-->
        <!--<ul class="control-sidebar-menu">-->
        <!--<li>-->
        <!--<a href="javascript::;">-->
        <!--<h4 class="control-sidebar-subheading">-->
        <!--Custom Template Design-->
        <!--<span class="pull-right-container">-->
        <!--<span class="label label-danger pull-right">70%</span>-->
        <!--</span>-->
        <!--</h4>-->

        <!--<div class="progress progress-xxs">-->
        <!--<div class="progress-bar progress-bar-danger" style="width: 70%"></div>-->
        <!--</div>-->
        <!--</a>-->
        <!--</li>-->
        <!--</ul>-->
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <!--<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>-->
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <!--<div class="tab-pane" id="control-sidebar-settings-tab">-->
      <!--<form method="post">-->
      <!--<h3 class="control-sidebar-heading">General Settings</h3>-->

      <!--<div class="form-group">-->
      <!--<label class="control-sidebar-subheading">-->
      <!--Report panel usage-->
      <!--<input type="checkbox" class="pull-right" checked>-->
      <!--</label>-->

      <!--<p>-->
      <!--Some information about this general settings option-->
      <!--</p>-->
      <!--</div>-->
      <!--&lt;!&ndash; /.form-group &ndash;&gt;-->
      <!--</form>-->
      <!--</div>-->
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="scripts/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="scripts/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="scripts/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->

<!--GOOGLE MAPS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoxlwjCtDHghu78qEOTVmTS8G5oBzaP70&callback=initMap"
        async defer></script>
<script>

  var styles  = [
    {
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#f5f5f5"
        }
      ]
    },
    {
      "elementType": "labels.icon",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#616161"
        }
      ]
    },
    {
      "elementType": "labels.text.stroke",
      "stylers": [
        {
          "color": "#f5f5f5"
        }
      ]
    },
    {
      "featureType": "administrative.land_parcel",
      "elementType": "labels",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "administrative.land_parcel",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#bdbdbd"
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#eeeeee"
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "labels.text",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "poi.business",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#e5e5e5"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#ffffff"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "labels.icon",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#dadada"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#616161"
        }
      ]
    },
    {
      "featureType": "road.local",
      "elementType": "labels",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "road.local",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    },
    {
      "featureType": "transit",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "featureType": "transit.line",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#e5e5e5"
        }
      ]
    },
    {
      "featureType": "transit.station",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#eeeeee"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#c9c9c9"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    }
  ];



  function initMap() {
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -31.536540, lng: -68.537945},
      scrollwheel: false,
      mapTypeControl: false,
      streetViewControl: false,
      zoom: 16,
      //customization
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles : styles
    });

    var myLatlng = new google.maps.LatLng(-31.536022,-68.533545);

    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map
    });
  }


</script>


<style>
  #map {
    /*width: 1000px;*/
    height: 500px;
    -webkit-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.75);
  }
</style>


</body>

</html>
