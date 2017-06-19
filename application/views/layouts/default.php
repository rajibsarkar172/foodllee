<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$page_title?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?=$css_url?>bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=$css_url?>admin_lte/AdminLTE.min.css">
	<link rel="stylesheet" href="<?=$css_url?>style.css">
	<link rel="stylesheet" href="<?=$css_url?>admin_lte/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?=$css_url?>plugins/bootstrap_datepicker/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?=$css_url?>plugins/lat_log_picker/jquery-gmaps-latlon-picker.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<!-------------------------js files------------------------->
	<!-- jQuery 3.1.1 -->
	<script src="<?=base_url()?>js/jquery-3.1.1.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?=$css_url.'plugins/bootstrap_datepicker/moment.js'?>"></script>
	<script src="<?=$css_url.'plugins/bootstrap_datepicker/bootstrap-datetimepicker.min.js'?>"></script>
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDM62AOslKaMohe390VwiCiyhxEDORHzFo"></script>
	<script src="<?=$css_url.'plugins/lat_log_picker/jquery-gmaps-latlon-picker.js'?>"></script>
	<script src="<?=base_url()?>js/bootstrap.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url()?>js/admin_lte/adminlte.min.js"></script>
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=$base_url.$active_controller.''?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=$image_url?>theme/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=$image_url?>theme/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=$image_url?>theme/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-ul"></i>
            <span>User Management</span>
            <span class="pull-right-container">
			<i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=$base_url.$active_controller?>">
			<i class="fa fa-circle-o"></i> User List</a>
			</li>
            <li><a href="<?=$base_url.$active_controller.'/registration_as_provider'?>">
			<i class="fa fa-circle-o"></i>Create New Provider</a>
			</li>
            <li><a href="<?=$base_url.$active_controller.'/registration_as_receiver'?>">
			<i class="fa fa-circle-o"></i>Create New Receiver</a>
			</li>
          </ul>
        </li>     
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	<h3 class="margin_0">
		<ol class="breadcrumb">
		<li><a href="<?=$base_url.$active_controller.''?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard(User List)</li>
	</ol>
	</h3>
		<?php
			echo $content_for_layout;
		?>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
<script type="text/javascript">
	$(function () {
		$('.datetimepicker').datetimepicker({
			format: 'DD-MM-YYYY'
		});
		$(".custom-modal").hide();
		$('body').on('click','#show-modal',function(){
			$(".custom-modal").addClass("modal");
			$(".custom-modal").fadeIn('slow');
			//$(this).css("color:gray");
			//google.maps.event.trigger(window, 'load', 'resize');
		});
	});
	/*------ modal-----*/
	// everytime the button is pushed, open the modal, and trigger the shown.bs.modal event
	
</script>
</body>
</html>
