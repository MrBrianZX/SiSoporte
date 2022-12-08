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
		<div>
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<button class="nav-link active" id="nav-general-tab" data-bs-toggle="tab" data-bs-target="#nav-general" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Soporte</button> 
                    <?php if(isset($_SESSION['LVL']))if($_SESSION['LVL'] == 2){ ?> 
                    <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Dar de alta</button>
					<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Dar de baja</button>
                <?php }?>                                                               
                </div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
					<table class="table">
						<thead>
							<tr>
								<th>Matricula</th>
								<th>Nombre</th>
								<th>Telefono</th>
								<th>Correo</th>
								<th>Fecha</th>
								<th>Estado</th>
							</tr>
						</thead>
						<tbody> 
                    <?php

                    include_once "../php/__connection.php" ;
                    $sql   = "SELECT * FROM soporte WHERE S_LVL = 1";

                    $result= mysqli_query($__CON,$sql);

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                            echo '
									
										<TR>
											<TD>'.$row['MATRICULA'].'</TD>'.
                                '
										
											<TD>'.$row['NOMBRE'].'</TD>'.
                                '
										
											<TD>'.$row['TELEFONO'].'</TD>'.
                                '
										
											<TD>'.$row['CORREO'].'</TD>'.
                                '
										
											<TD>'.$row['FECHA_REGISTRO'].'</TD>'.
                                '
										
											<TD>Activo</TD>
										</TR>';
                        }
                    } 
                    else {
                        echo "No hay gente en soporte :(";
                    }

                ?> </tbody>
					</table>
				</div> <?php if(isset($_SESSION['LVL']))if($_SESSION['LVL'] == 2){ ?> <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<form class="row g-3 needs-validation" action="../php/altaUsuario.php" method="post">
						<div class="col-md-6">
							<label for="validationCustom01" class="form-label">Matricula</label>
							<input type="number" class="form-control" id="validationCustom01" name="MATRICULA" required>
						</div>
						<div class="col-md-6">
							<label for="validationCustom02" class="form-label">Nombre</label>
							<input type="text" class="form-control" id="validationCustom02" name="NOMBRE" required>
						</div>
						<div class="col-md-6">
							<label for="validationCustom01" class="form-label">Telefono</label>
							<input type="tel" class="form-control" id="validationCustom01" name="TELEFONO" required>
						</div>
						<div class="col-md-6">
							<label for="validationCustom02" class="form-label">Correo</label>
							<input type="email" class="form-control" id="validationCustom02" name="CORREO" required>
						</div>
						<div class="col-md-12">
							<label for="validationCustom01" class="form-label">Password</label>
							<input type="password" class="form-control" id="validationCustom01" name="PASSWORD" required>
						</div>
						<div class="col-md-3"></div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="reset" style="margin-top: 15px; background: red;">Limpiar</button>
							</center>
						</div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="submit" style="margin-top: 15px;">Registrar Persona</button>
							</center>
						</div>
						<div class="col-md-3"></div>
					</form>
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<form class="row g-3 needs-validation" action="../php/bajaUsuario.php" method="post">
						<div class="col-md-12">
							<label for="validationCustom01" class="form-label">Matricula</label>
							<input type="number" class="form-control" id="validationCustom01" name="MATRICULA" required>
						</div>
						<div class="col-md-3"></div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="reset" style="margin-top: 15px; background: red;">Limpiar</button>
							</center>
						</div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="submit" style="margin-top: 15px;">Dar de Baja Usuario</button>
							</center>
						</div>
						<div class="col-md-3"></div>
					</form>
				</div> <?php }?>
			</div>
		</div>
	</body>
	<script src="js/bootstrap.bundle.min.js"></script>
</html>