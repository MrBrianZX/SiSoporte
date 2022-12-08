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
	<body> <?php include("../php/menu.php");?>
		<!-- MENU  -->
		<div>
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<button class="nav-link active" id="nav-equipos-tab" data-bs-toggle="tab" data-bs-target="#nav-equipos" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Matenimientos en proceso</button>
					<button class="nav-link" id="nav-alta-tab" data-bs-toggle="tab" data-bs-target="#nav-alta" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Registrar Matenimiento</button>

					</button>	</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-equipos" role="tabpanel" aria-labelledby="nav-equipos-tab">
					<br> <?php
						include_once "../php/__connection.php" ;
						$sql   = "SELECT M.idMATENIMIENTOS, S.NOMBRE, E.CODIGO_UABC, M.FECHA, M.DETALLES, E.TIPO FROM `matenimientos` AS M
						JOIN soporte AS S ON S.MATRICULA = M.ID_SOPORTE
						JOIN equipos AS E ON E.CODIGO_UABC = M.idEQUIPOS WHERE M.ESTADO = 1;";

						$result= mysqli_query($__CON,$sql);

						if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_array($result)) { ?> <div class="card mb-3" style="max-height: 540px;">
						<div class="row g-0">
							<div class="col-md-2">
								<center>
									<img src="../media/images/PC.jpg" height="100px" class="img-fluid rounded-start" alt="...">
								</center>
							</div>
							<div class="col-md-10">
								<div class="card-body">									
								<h5 class="card-title"> <?php echo $row['TIPO']; ?> </h5></a>
									<p class="card-text">Codigo UABC de Equipo: <?php echo $row['CODIGO_UABC']; ?> </p>
									<p class="card-text">Fecha de registro de Matenimiento <?php echo $row['FECHA']; ?> </p>
									<p class="card-text">Encargado: <?php echo $row['NOMBRE']; ?> </p>
									<p class="card-text">Descripcion: <?php echo $row['DETALLES']; ?> </p>
									<a href="../php/finalizarMantemiento.php?id=<?php echo $row['idMATENIMIENTOS'] ?>">FINALIZAR MANTENIMIENTO</a>
								</div>
							</div>
						</div>
					</div> <?php 
					}
						} 
						else {
							echo "No hay mantemientos pendientes :)";
						}
					?>
				</div>
				<div class="tab-pane fade" id="nav-alta" role="tabpanel" aria-labelledby="nav-home-tab">
					<form class="row g-3 needs-validation" action="../php/altaMantenimiento.php" method="post" enctype="multipart/form-data">
						<div class="col-md-6">
							<label for="validationCustom01" class="form-label">Código UABC</label>
							<input type="text" class="form-control" id="validationCustom01" name="CodigoUABC" required>
						</div>
						<div class="col-md-6">
							<label for="validationCustom02" class="form-label">Matricula Encargado</label>
							<input type="text" class="form-control" id="validationCustom02" name="Matricula" required>
						</div>
						<div class="col-md-12">
							<label for="exampleFormControlTextarea1" class="form-label">Tareas</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="8" style="resize: none" name="Detalles"></textarea>
						</div>
						<div class="col-md-3"></div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="reset" style="margin-top: 15px; background: red;">Limpiar</button>
							</center>
						</div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="submit" style="margin-top: 15px;">Registrar Equipo</button>
							</center>
						</div>
						<div class="col-md-3"></div>
					</form>
				</div>
			</div>
		</div>
	</body>
	<script src="js/bootstrap.bundle.min.js"></script>
</html>