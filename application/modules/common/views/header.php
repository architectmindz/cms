<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $pageTitle. ' - Al Ain Holdings'; ?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Main CSS-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>css/main.css">
		<!-- Font-icon css-->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- jQuery Modal CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
		
		<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
	</head>
	<body class="app sidebar-mini rtl">
		<!-- Navbar-->
		<header class="app-header"><a class="app-header__logo" href="#"><?php echo ucwords($this->session->userdata('username')); ?></a>
			<!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
			<!-- Navbar Right Menu-->
			<ul class="app-nav">
				<!-- User Menu-->
				<li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
					<ul class="dropdown-menu settings-menu dropdown-menu-right">
						<li><a class="dropdown-item" href="<?php echo base_url('admin/settings'); ?>"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
						<li><a class="dropdown-item" href="<?php echo base_url('admin/authorize/logout'); ?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</header>

