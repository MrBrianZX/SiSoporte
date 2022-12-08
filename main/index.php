<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sistema Integral de Soporte Técnico</title>
		<!-- CSS Manuales -->
		<link rel="stylesheet" href="../css/styles.css">
		<!-- CSS por Bootstrap -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- ICONO -->
		<link rel="shortcut icon" href="../media/UABC.ico" />
		<meta charset="utf-8">
	</head>
	<body> <?php include("../php/menu.php");?>
		<!-- MENU  -->
		<div class="contenedor">
			<p style="font-size: 64px; text-align: center; color: #058042;">Bienvenido al Sistema Integral de Soporte</p>
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="../media/images/RFoto01.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../media/images/RFoto02.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../media/images/RFoto03.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../media/images/RFoto04.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../media/images/RFoto05.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../media/images/RFoto06.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../media/images/RFoto07.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../media/images/RFoto08.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="../media/images/RFoto09.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
			<br>
			<!--<center>
				<a href="./reportarFalla.php" style="font-size: 32px; text-align: center; color: #058042; text-decoration: none;"> Reporte su falla Aqui</a>
			</center>-->
		</div>
	</body>
	<script src="js/bootstrap.bundle.min.js"></script>
</html>