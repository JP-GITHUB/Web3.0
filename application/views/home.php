<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Web 3.0</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body>

	<div id="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!--
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Link</a></li>
				</ul>
				-->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url();?>Diseno/listar">Ver diseños</a></li>
						<li><a href="<?php echo base_url();?>Cliente/ingreso">Ingreso a usuarios</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<div class="container">
			<div class="jumbotron">
				<h1>Web 3.0</h1>
				<p>Crea tu sitio con nosotros...</p>
				<p><a class="btn btn-primary btn-lg" href="<?php echo base_url();?>Cliente/ingreso" role="button">Ingresar aqui.</a></p>
			</div>
		</div>
		
		
		
	</div>
	<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>
	<script>
		var redirect_msg = "<?php echo ($this->session->flashdata('redirect_msg')) ? $this->session->flashdata('redirect_msg') : '';?>";
		if(redirect_msg !== "") bootbox.alert(redirect_msg);
	</script>
</body>
</html>