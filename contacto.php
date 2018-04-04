<?php
	
	if( isset( $_GET["rta"] ) ){

		$rta = $_GET["rta"];

		switch( $rta ){
			
			case '0x001':
				$mensaje = "ERROR!!! Nombre invalido...";
			break;

			case '0x002':
				$mensaje = "ERROR!!! El email no puede quedar vacio y debe tener formato de email...";
			break;

			case '0x003':
				$mensaje = "ERROR!!! El mensaje deben tener maximo 140 caracteres";
			break;

		}

		$alerta = '<div class="alert alert-danger" role="alert">' . $mensaje . '</div>';
	
	} else {

		$alerta = null;

	}

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Formulario de Contacto</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="container-fluid">

		<?php echo $alerta; ?>

		<div class="page-header">
			<h1>Contacto</h1>
		</div>

		<form class="form-horizontal" action="enviar.php" method="post">
			<div class="form-group">
				<label for="nombre" class="col-sm-2 control-label">Nombre:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nombre">
				</div>
			</div>

			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">E-Mail:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="mail">
				</div>
			</div>

			<div class="form-group">
				<label for="mensaje" class="col-sm-2 control-label">Mensaje:</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="mensaje" rows="6"></textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Enviar</button>
				</div>
			</div>
		</form>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>