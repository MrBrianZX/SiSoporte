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
					<button class="nav-link active" id="nav-equipos-tab" data-bs-toggle="tab" data-bs-target="#nav-equipos" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Equipos</button>
					<button class="nav-link" id="nav-alta-tab" data-bs-toggle="tab" data-bs-target="#nav-alta" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Dar de Alta</button>
					<button class="nav-link" id="nav-actualizar-tab" data-bs-toggle="tab" data-bs-target="#nav-actualizar" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Actualizar Información</button>
					<button class="nav-link" id="nav-entrega-tab" data-bs-toggle="tab" data-bs-target="#nav-entrega" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Entregar Equipo</button>
					<button class="nav-link" id="nav-devolucion-tab" data-bs-toggle="tab" data-bs-target="#nav-devolucion" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Devolución de Equipo</button>
					<button class="nav-link" id="nav-baja-tab" data-bs-toggle="tab" data-bs-target="#nav-baja" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Dar de Baja</button>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-equipos" role="tabpanel" aria-labelledby="nav-equipos-tab">
					<br> <?php
						include_once "../php/__connection.php" ;
						$sql   = "SELECT * FROM equipos WHERE ESTADO = 1";

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
									<p class="card-text">Codigo UABC: <?php echo $row['CODIGO_UABC']; ?> </p>
									<p class="card-text">Numero de Serie: <?php echo $row['NUMERO_SERIE']; ?> </p>
									<p class="card-text">Marca: <?php echo $row['MARCA']; ?> </p>
									<p class="card-text">Modelo: <?php echo $row['MODELO']; ?> </p>
									<p class="card-text">Propietario: <?php echo $row['ESTADO']; ?> </p>
								</div>
							</div>
						</div>
					</div> <?php 
					}
						} 
						else {
							echo "No hay Equipos :(";
						}
					?>
				</div>
				<div class="tab-pane fade" id="nav-alta" role="tabpanel" aria-labelledby="nav-home-tab">
					<form class="row g-3 needs-validation" action="../php/altaEquipo.php" method="post" enctype="multipart/form-data">
						<div class="col-md-6">
							<label for="validationCustom01" class="form-label">Código UABC</label>
							<input type="text" class="form-control" id="validationCustom01" name="CodigoUABC" required>
						</div>
						<div class="col-md-6">
							<label for="validationCustom02" class="form-label">No. Serie</label>
							<input type="text" class="form-control" id="validationCustom02" name="NoSerie" required>
						</div>
						<div class="col-md-4">
							<label for="validationCustom02" class="form-label">Marca</label>
							<input type="text" class="form-control" id="validationCustom02" name="Marca" required>
						</div>
						<div class="col-md-4">
							<label for="validationCustom05" class="form-label">Modelo</label>
							<input type="text" class="form-control" id="validationCustom05" name="Modelo" required>
							<div class="invalid-feedback"> Please provide a valid zip. </div>
						</div>
						<div class="col-md-4">
							<label for="validationCustom03" class="form-label">Tipo</label>
							<input type="text" class="form-control" id="validationCustom03" name="Tipo" required>
							<div class="invalid-feedback"> Please provide a valid city. </div>
						</div>
						<div class="col-md-12">
							<label for="validationCustom03" class="form-label">Perifericos Extra y Detalles</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="8" style="resize: none" name="DETALLES"></textarea>
							<div class="invalid-feedback"> Please provide a valid city. </div>
						</div>
						<div class="col-md-12">
							<label for="exampleFormControlTextarea1" class="form-label">Notas</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="8" style="resize: none" name="NOTAS"></textarea>
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
				<div class="tab-pane fade" id="nav-actualizar" role="tabpanel" aria-labelledby="nav-home-tab">
					<form class="row g-3 needs-validation" action="../php/updateEquipo.php" method="post" enctype="multipart/form-data">
						<div class="col-md-6">
							<label for="validationCustom01" class="form-label">Código UABC</label>
							<input type="text" class="form-control" id="validationCustom01" name="CodigoUABC" required>
						</div>
						<div class="col-md-6">
							<label for="validationCustom02" class="form-label">No. Serie</label>
							<input type="text" class="form-control" id="validationCustom02" name="NoSerie" required>
						</div>
						<div class="col-md-4">
							<label for="validationCustom02" class="form-label">Marca</label>
							<input type="text" class="form-control" id="validationCustom02" name="Marca" required>
						</div>
						<div class="col-md-4">
							<label for="validationCustom05" class="form-label">Modelo</label>
							<input type="text" class="form-control" id="validationCustom05" name="Modelo" required>
							<div class="invalid-feedback"> Please provide a valid zip. </div>
						</div>
						<div class="col-md-4">
							<label for="validationCustom03" class="form-label">Tipo</label>
							<input type="text" class="form-control" id="validationCustom03" name="Tipo" required>
							<div class="invalid-feedback"> Please provide a valid city. </div>
						</div>
						<div class="col-md-12">
							<label for="validationCustom03" class="form-label">Perifericos Extra y Detalles</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="8" style="resize: none" name="DETALLES"></textarea>
							<div class="invalid-feedback"> Please provide a valid city. </div>
						</div>
						<div class="col-md-12">
							<label for="exampleFormControlTextarea1" class="form-label">Notas</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="8" style="resize: none" name="NOTAS"></textarea>
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
				<div class="tab-pane fade" id="nav-entrega" role="tabpanel" aria-labelledby="nav-home-tab">
					<form class="row g-3 needs-validation" action="../php/entregaEquipo.php" method="post">
						<div class="col-md-12">
							<label for="validationCustom01" class="form-label">No. de Empleado</label>
							<input type="number" class="form-control" id="validationCustom01" name="NO_EMPLEADO" required>
							<label for="validationCustom01" class="form-label">Codigo UABC</label>
							<input type="number" class="form-control" id="validationCustom01" name="CodigoUABC" required>
						</div>
						<div class="col-md-3"></div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="reset" style="margin-top: 15px; background: red;">Limpiar</button>
							</center>
						</div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="submit" style="margin-top: 15px;">Registrar Entrega</button>
							</center>
						</div>
						<div class="col-md-3"></div>
					</form>
				</div>
				<div class="tab-pane fade" id="nav-devolucion" role="tabpanel" aria-labelledby="nav-home-tab">
					<form class="row g-3 needs-validation" action="../php/devolucionEquipo.php" method="post">
						<div class="col-md-12">
							<label for="validationCustom01" class="form-label">Codigo UABC</label>
							<input type="number" class="form-control" id="validationCustom01" name="CodigoUABC" required>
						</div>
						<div class="col-md-3"></div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="reset" style="margin-top: 15px; background: red;">Limpiar</button>
							</center>
						</div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="submit" style="margin-top: 15px;">Registrar Devolución</button>
							</center>
						</div>
						<div class="col-md-3"></div>
					</form>
				</div>
				<div class="tab-pane fade" id="nav-baja" role="tabpanel" aria-labelledby="nav-home-tab">
					<form class="row g-3 needs-validation" action="../php/bajaEquipo.php" method="post">
						<div class="col-md-12">
							<label for="validationCustom01" class="form-label">Codigo UABC</label>
							<input type="number" class="form-control" id="validationCustom01" name="CodigoUABC" required>
						</div>
						<div class="col-md-3"></div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="reset" style="margin-top: 15px; background: red;">Limpiar</button>
							</center>
						</div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="submit" style="margin-top: 15px;">Dar de Baja Propietario</button>
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