<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Web 3.0</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

	<style>
		.navbar {
			border-radius: 0;
		}
		.sect-listado-disenos .panel-body{
			height: 300px;
			overflow-x:hidden;
			overflow-y:hidden;
			padding: 0;
		}
	</style>
</head>
<body>
	<div>
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
					<a class="navbar-brand" href="#">Web 3.0 - Crear Sitio</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Ver Información</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Sesión</a></li>
						</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>		

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
				<button type="submit" class="btn btn-default">Buscar</button>
			</form>

			<br/ >

			<div class="sect-listado-disenos row">
				<?php foreach($disenos as $diseno):?>
					<div class="panel panel-default clearfix">
						<div class="panel-heading">
							<h3 class="panel-title"><?php echo $diseno['name']; ?></h3>
						</div>
						<div class="panel-body">
							<img src="<?php echo base_url();?>assets/images/massively.jpg" class="img-responsive">
						</div>

						<div class="panel-footer">
							<a href="<?php echo base_url();?>Cliente/ingreso/<?php echo $diseno['id']; ?>" class="btn btn-primary">Usar Diseño</a>
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