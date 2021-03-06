<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Web 3.0 - Administración Clientes</title>

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

				<ul class="nav navbar-nav">
					<!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
					<li><a href="#">Web 3.0 - ADMINISTRADOR</a></li>
				</ul>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url();?>Cliente/cerrar_sesion">Cerrar Sesión</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<div class="container-fluid">
			<ul class="nav nav-pills">
				<li class="active"><a href="<?php echo base_url();?>Diseno/listar">Crear Sitio</a></li>
			</ul>
		</div>
		<br />
		<div class="container">
			<div class="sect-listado-sitios row">
				<?php foreach($sitios as $sitio):?>
					<div class="panel panel-default clearfix">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo $sitio['titulo']; ?></h3>
						</div>
						<div class="panel-body">
							<img src="<?php echo base_url();?>assets/images/<?php echo $sitio['ruta']; ?>.jpg" class="img-responsive">
						</div>

						<div class="panel-footer">
							<a href="<?php echo base_url();?>Main/<?php echo $sitio['ruta']; ?>/<?php echo $sitio['id_sitio']; ?>" class="btn btn-primary">Ver Sitio</a>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
			
	</div>
	<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>