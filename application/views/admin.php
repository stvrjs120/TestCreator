<!DOCTYPE html>

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo $title; ?></title>
		<link type="text/css" href="<?php echo base_url();?>assets/css/dba/jquery-ui.css" rel="Stylesheet" />  
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css" type="text/css" media="screen" charset="utf-8">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="screen" charset="utf-8">
		
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/treeview/jquery.treeview.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/treeview/screen.css" />
		<script src="<?php echo base_url();?>assets/js/jquery.treeview.js" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/demo.js"></script>
	</head>

	<body>
		<div id="wrapper">
			<div id="header">
				<div class="container">
					<a class="site-logo" href="#">
						<img src="<?php echo base_url();?>assets/img/my_Logo.png" height="50">
					</a>
					<div id="userbox">
						<div id="user" title="Main Page">
							<a href="<?php echo base_url();?> index.php/site/user_area">
								<img alt="Main" src="<?php echo base_url();?>assets/img/user.png" height="20" width="20">
							</a>
							<?php echo anchor('site/user_area', 'usuario', array('class' => 'name')); ?>
						</div>
						<ul id="user-links">
							<li>
								<a title="Create Connection" id="new_conn" href="#">
									<img alt="Connect" src="<?php echo base_url();?>assets/img/connect.png" height="20">
								</a>
							</li>
							<li>
								<a title="Settings" id="sett" class="" href="<?php echo base_url();?>index.php/site/settings">
									<img alt="Settings" src="<?php echo base_url();?>assets/img/settings.png" height="20">
								</a>
							</li>
							<li>
								<a title="Logout" id="lOut" class="" href="<?php echo base_url();?>index.php/site/logout">
									<img alt="Logout" src="<?php echo base_url();?>assets/img/logout.png" height="20">
								</a>
							</li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div id="main">
				<?php $this->load->view($content); ?>
				<div class="clear"> </div>
			</div>
			<div id="footer">
				&copy;
            	Copyleft | TestCreator 2012
			</div>
		</div>
	</body>
</html>