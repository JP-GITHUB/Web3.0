<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Web3.0 - Crear usuario</title>
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
					<a class="navbar-brand" href="#">Web 3.0</a>
				</div>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
		          <ul class="nav navbar-nav">
		            <li class="active"><a href="<?php echo base_url();?>Administrador/administracion">Home</a></li>
		            <li><a href="<?php echo base_url();?>Administrador/crear">Crear Usuario</a></li>
		            <li><a href="<?php echo base_url();?>Administrador/listar">Listar Usuario</a></li>
		          </ul>
        	</div><!--/.nav-collapse -->
		</div>
	</nav>

	<br><br>

	<div class="container">

	<h1>Listado de usuarios</h1>

	<table class="table table-bordered">
		<thead class="bg-primary">
				<tr>
				 	<th width="5%">Nº</th>
					<th width="10%">Rut</th>
					<th width="10%">Nombre</th>
					<th width="10%">Apellido Paterno</th>
					<th width="10%">Apellido Materno</th>
					<th width="10%">Email</th>
					<th width="10%">Estado</th>
					<th width="10%">Rol</th>
					<th width="10%">Acciones</th>
				</tr>

		</thead>
		<tbody>

		<?php $i=0; foreach ($personas as $key => $value) { $i++ ?>
			
			<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $value['rut']; ?></td>
					<td><?php echo $value['nombre']; ?></td>
					<td><?php echo $value['apellido_paterno']; ?></td>
					<td><?php echo $value['apellido_materno']; ?></td>
					<td><?php echo $value['email']; ?></td>
					<td><?php if ($value['estado'] == 1) { echo 'Inactivo'; } else { echo 'Activo'; } ?></td>
					<td><?php echo $value['glosa']; ?></td>
					<td>
						<a href="<?php echo base_url();?>Administrador/editar/<?php echo $value['id_persona']; ?>" class="btn btn-warning btn-sm btn-block"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Editar</a>
						<a href="<?php echo base_url();?>Administrador/cambiar_status_persona/<?php echo $value['id_persona']; ?>/<?php echo $value['estado']; ?>" class="btn btn-info btn-sm btn-block"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;Estado</a>
					</td>
				</tr>

				<?php } ?>
		</tbody>

	</table>


	</div>
	<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootbox.min.js"></script>
	<script>
		$(document).ready(function(){
			var redirect_msg = "<?php echo ($this->session->flashdata('redirect_msg')) ? $this->session->flashdata('redirect_msg') : '';?>";
			if(redirect_msg !== "") bootbox.alert(redirect_msg);
		});
	</script>
</body>
</html>
