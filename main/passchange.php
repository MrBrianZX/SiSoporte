<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistema Integral de Soporte Técnico</title>
		<script src="main.js"></script>
		<!-- CSS Manuales -->
		<link rel="stylesheet" href="../css/styles.css">
		<!-- CSS por Bootstrap -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- ICONO -->
        <link rel="shortcut icon" href="../media/UABC.ico" />
		<meta charset="utf-8">
	</head>
    <!-- MENU  -->
	<body> <?php include("../php/menu.php");?>
		<div class="row align-items-center" style="margin-top: 10%;">
			<div class="col"></div>
			<div class="col">
				<form action="../php/passchg.php" method="post">
					<!-- Password input -->
					<div class="form-outline mb-4">
						<input type="hidden" value=<?php echo $_SESSION['USER'];?> name="EMAIL">
						<input type="password" id="form2Example1" class="form-control" name="PASS" minlength="8" maxlength="32" required />
						<label class="form-label" for="form2Example1">Contraseña Anterior</label>
					</div>
					<!-- New Password input -->
					<div class="form-outline mb-4">
						<input type="password" id="form2Example2" class="form-control" name="NPASS" minlength="8" maxlength="32" required />
						<label class="form-label" for="form2Example2">Nueva Contraseña</label>
					</div>
					<!-- Submit button -->
					<button type="submit" class="btn btn-primary btn-block mb-4">Cambiar Contraseña</button>
				</form>
			</div>
			<div class="col"></div>
		</div>
		<?php if(isset($_GET['success'])){?>
			<div class="alert alert-success" role="alert">
				Contraseña Cambiada Exitosamente!
			</div>
		<?php } if(isset($_GET['error'])){ ?>
			<div class="alert alert-danger" role="alert">
				Error al cambiar Contraseña!
			</div>
		<?php } ?>
	</body>
	<script src="js/bootstrap.bundle.min.js"></script>
</html>