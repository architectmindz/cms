<!-- PHP Code -->
<?php
$fullname = $this->session->userdata('username');
?>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
	<div class="app-sidebar__user">
		<img class="app-sidebar__user-avatar" src="<?php echo base_url('assets/images/admin.png'); ?>" alt="User Image">
		<div>
			<p class="app-sidebar__user-name"><?php echo ucwords($fullname); ?></p>
		</div>
	</div>
	<ul class="app-menu">
		<li><a class="app-menu__item <?php if($menuItem == 'dashboard'){ echo "active"; } ?>" href="<?php echo base_url('admin/dashboard'); ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
		<li><a class="app-menu__item <?php if($menuItem == 'pages'){ echo "active"; } ?>" href="<?php echo base_url('pages/index'); ?>"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span></a></li>
		<li><a class="app-menu__item <?php if($menuItem == 'media'){ echo "active"; } ?>" href="<?php echo base_url('media/index'); ?>"><i class="app-menu__icon fa fa-photo"></i><span class="app-menu__label">Media</span></a></li>
		<li><a class="app-menu__item <?php if($menuItem == 'menu'){ echo "active"; } ?>" href="<?php echo base_url('menu/index'); ?>"><i class="app-menu__icon fa fa-bars"></i><span class="app-menu__label">Menu</span></a></li>
		<li><a class="app-menu__item <?php if($menuItem == 'events'){ echo "active"; } ?>" href="<?php echo base_url('events/index'); ?>"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Events</span></a></li>
		<li><a class="app-menu__item <?php if($menuItem == 'news'){ echo "active"; } ?>" href="<?php echo base_url('news/index'); ?>"><i class="app-menu__icon fa fa-newspaper-o"></i><span class="app-menu__label">News & Announcements</span></a></li>
	</ul>
</aside>
