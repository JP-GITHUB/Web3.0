<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Web3.0 - Listar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
</head>
<body id="Web 3.0" data-spy="scroll" data-target=".navbar" data-offset="60">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="myNavbar">
					<a class="navbar-brand" href="#">Web 3.0 - Listar</a>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url();?>Cliente/cerrar_sesion">Cerrar Sesión</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<br><br><br>

	<div class="container">			
		<form class="form-inline">
			<div class="form-group">
				<label class="sr-only">Email</label>
				<p class="form-control-static">Buscador</p>
			</div>
			<div class="form-group">
				<label for="" class="sr-only">Buscar</label>
				<input type="text" class="form-control" id="" placeholder="Buscar">
			</div>
			<button type="submit" class="btn btn-default" disabled="disabled">Buscar</button>
			<a class="btn btn-default pull-right" href="<?php echo base_url();?>Cliente/administracion">Volver</a>
		</form>

		<br/ >

		<div class="sect-listado-disenos row">
			<?php foreach($disenos as $diseno):?>
				<div class="panel panel-default clearfix">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo $diseno['nombre']; ?></h3>
					</div>
					<div class="panel-body">
						<img src="<?php echo base_url();?>assets/images/massively.jpg" class="img-responsive">
					</div>

					<div class="panel-footer">
						<a href="<?php echo base_url();?>Sitio/configuracion_diseno/<?php echo $diseno['id_diseno']; ?>" class="btn btn-primary">Usar Diseño</a>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
	<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>
