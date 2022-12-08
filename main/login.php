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
		<meta charset="utf-8">
	</head>
    <!-- MENU  -->
	<body> <?php include("../php/menu.php");?>
		<div class="row align-items-center" style="margin-top: 10%;">
			<div class="col"></div>
			<div class="col">
				<form action="../php/login.php" method="post">
					<!-- Email input -->
					<div class="form-outline mb-4">
						<input type="email" id="form2Example1" class="form-control" name="user" required />
						<label class="form-label" for="form2Example1">Email</label>
					</div>
					<!-- Password input -->
					<div class="form-outline mb-4">
						<input type="password" id="form2Example2" class="form-control" name="pass" required />
						<label class="form-label" for="form2Example2">Password</label>
					</div>
					<!-- Submit button -->
					<button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
				</form>
			</div>
			<div class="col"></div>
		</div>
		<?php if(isset($_GET['error'])){ ?>
			<div class="alert alert-danger" role="alert">
				Error al iniciar sesion Contraseña o Usuario erroneos!
			</div>
		<?php } ?>
	</body>
	<script src="js/bootstrap.bundle.min.js"></script>
</html>