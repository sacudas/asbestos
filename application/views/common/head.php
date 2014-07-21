<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Asbestos</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
		<link href="<?php echo base_url("assets/css/application.css"); ?>" rel="stylesheet">
		<script src="<?php echo base_url('assets/js/jquery-1.10.2.js') ?>"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
		<script src="<?php echo base_url('assets/js/application.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/load.js'); ?>"></script>
		</head>

	<body>

		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url(); ?>">Asbestos</a>
			</div>
			<div class="collapse navbar-collapse">
				<?php if (isset($this->user->id) && $this->user->id > 0) { ?>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo site_url("ticks/index"); ?>">Ticks</a></li>
						<li><a href="<?php echo site_url("main/sign_out"); ?>">Sign out</a></li>
					</ul>
				<?php } else { ?>
					<form action="<?php echo site_url("main/sign_in"); ?>" method="post" class="navbar-form navbar-right" role="form">
						<div class="form-group">
							<input name="email" type="text" placeholder="Email" class="form-control">
						</div>
						<div class="form-group">
							<input name="password" type="password" placeholder="Password" class="form-control">
						</div>
						<button type="submit" class="btn btn-success">Sign in</button>
					</form>
				<?php } ?>
			</div><!--/.nav-collapse -->
			</div>
		</div>

