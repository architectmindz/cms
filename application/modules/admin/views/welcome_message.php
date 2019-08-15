<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Main CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>css/main.css">
	<!-- Font-icon css-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Al Ain Holding CMS - Login</title>
  </head>
  <body>
	<section class="material-half-bg">
	  <div class="cover"></div>
	</section>
	<section class="login-content">
	  <div class="logo">
		<h1>Welcome To Al Ain Holding CMS</h1>
	  </div>
	  <div class="login-box">
		<form class="login-form" action="<?php echo base_url('admin/authorize'); ?>" method="post">
		  <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
			<?php if($this->session->flashdata('loginerror')){ ?>
				<div class="alert alert-danger alert-dismissible">
					<strong>Error! </strong><?php echo $this->session->flashdata('loginerror'); ?>
				</div>
			<?php } ?>
		  <div class="form-group">
			<label class="control-label">USERNAME</label>
			<input class="form-control" autocomplete="off" type="text" placeholder="Username" name="username" autofocus>
		  </div>
		  <div class="form-group">
			<label class="control-label">PASSWORD</label>
			<input class="form-control"  autocomplete="off" type="password" placeholder="Password" name="password">
		  </div>
		  <div class="form-group btn-container">
			<button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
		  </div>
		</form>
	  </div>
	</section>
	<!-- Essential javascripts for application to work-->
	<script src="<?php echo base_url('assets/'); ?>js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/'); ?>js/main.js"></script>
	<!-- The javascript plugin to display page loading on top-->
	<script src="<?php echo base_url('assets/'); ?>js/plugins/pace.min.js"></script>
  </body>
</html>