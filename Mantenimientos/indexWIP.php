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
	<body>
		<!-- Contenedor de barra principal --> <?php include("../php/menu.php");?>
		<!-- MENU  -->
		<!-- Menu de Mantenimiento de Soporte -->
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<!--Tab de Historial de Equipo-->
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="history-tab" data-bs-toggle="tab" data-bs-target="#History" type="button" role="tab" aria-controls="history" aria-selected="false">Historial De Equipos</button>
			</li>
			<!--Tab de Mantenimientos Recientes-->
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="recent-tab" data-bs-toggle="tab" data-bs-target="#Recent" type="button" role="tab" aria-controls="recent" aria-selected="false">Mantenimientos Recientes</button>
			</li>
			<!--Tab de Por Laboratorios-->
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="active-tab" data-bs-toggle="tab" data-bs-target="#ByLabs" type="button" role="tab" aria-controls="active" aria-selected="false">Por Laboratorios</button>
			</li>
			<!--Tab de Mantenimientos En Proceso-->
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="closed-tab" data-bs-toggle="tab" data-bs-target="#InProcess" type="button" role="tab" aria-controls="closed" aria-selected="false">En Proceso</button>
			</li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<!--Tab de Mantenimiento Reciente-->
			<div class="tab-pane fade show active" id="History" role="tabpanel" aria-labelledby="History-tab">
				<div class="container mt-3">
					<h2>Historial De Mantenimiento De Equipo</h2>
					<div class="col-md-2">
						<label for="inventario" class="form-label">Codigo Uabc</label>
						<input type="number" class="form-control" id="validationCustom01">
					</div>
					<!--<div class="col-md-2">
						<label for="serie" class="form-label">Por Numero de Serie</label>
						<input type="textdomain" class="form-control" id="validationCustom01">
					</div>-->
					<div class="col-3">
						<button class="btn btn-primary" type="submit" style="margin-top: 15px;">Buscar</button>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>Fecha de inicio:</th>
								<th>Recibido por:</th>
								<th>Asignado a:</th>
								<th>Nivel de urgencia:</th>
								<th>Terminado:</th>
								<th>Actividades realizadas:</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>01 de Diciembre del 2022</td>
								<td>Yihao Zheng</td>
								<td>Alejandro Sanchez</td>
								<td>Medio</td>
								<td>02 de Diciembre del 2022</td>
								<td>- Hacer respaldo <br>- Formatear <br>- Instalar software básico </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--Tab de Mantenimiento Reciente-->
			<div class="tab-pane" id="Recent" role="tabpanel" aria-labelledby="Recent-tab">
				<div class="container mt-3">
					<h2>Mantenimientos Recientes</h2>
					<table class="table">
						<thead>
							<tr>
								<th>Fecha de inicio:</th>
								<th>Recibido por:</th>
								<th>Asignado a:</th>
								<th>Nivel de urgencia:</th>
								<th>Terminado:</th>
								<th>Actividades realizadas:</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>01 de Diciembre del 2022</td>
								<td>Yihao Zheng</td>
								<td>Alejandro Sanchez</td>
								<td>Medio</td>
								<td>02 de Diciembre del 2022</td>
								<td>- Hacer respaldo <br>- Formatear <br>- Instalar software básico </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--Tab de laboratorios-->
			<div class="tab-pane" id="ByLabs" role="tabpanel" aria-labelledby="Bylabs-tab">
				<div class="contenedorT1">
					<center>
						<h4>Encontrar historial por Laboratorio</h4>
						<form class="row g-5 needs-validation" novalidate>
							<center>
								<div class="col-md-2">
									<label for="ubicacion" class="form-label">Laboratorio a revisar:</label>
									<select class="form-select form-select-sm" aria-label=".form-select-sm">
										<option selected>Seleccionar</option>
										<option value="1">Laboratorio 201</option>
										<option value="2">Laboratorio 202</option>
										<option value="3">Laboratorio 203</option>
										<option value="4">Laboratorio 204</option>
										<option value="5">Laboratorio 205</option>
										<option value="6">Laboratorio 206</option>
										<option value="7">Laboratorio 207</option>
										<option value="8">Laboratorio 208</option>
									</select>
								</div>
							</center>
							<center>
								<div class="col-md-2">
									<label for="tipoFalla" class="form-label">Número de computadora:</label>
									<select class="form-select form-select-sm" aria-label=".form-select-sm">
										<option selected>Seleccionar</option>
										<option value="1">Computadora 1</option>
										<option value="2">Computadora 2</option>
										<option value="3">Computadora 3</option>
										<option value="4">Computadora 4</option>
										<option value="5">Computadora 5</option>
										<option value="6">Computadora 6</option>
										<option value="7">Computadora 7</option>
										<option value="8">Computadora 8</option>
										<option value="9">Computadora 9</option>
										<option value="10">Computadora 10</option>
										<option value="11">Computadora 11</option>
										<option value="12">Computadora 12</option>
										<option value="13">Computadora 13</option>
										<option value="14">Computadora 14</option>
										<option value="15">Computadora 15</option>
										<option value="16">Computadora 16</option>
										<option value="17">Computadora 17</option>
										<option value="18">Computadora 18</option>
										<option value="19">Computadora 19</option>
										<option value="20">Computadora 20</option>
										<option value="21">Computadora 21</option>
									</select>
								</div>
							</center>
						</form>
					</center>
				</div>
				<div class="contenedorBotones">
					<form class="row g-3 needs-validation" novalidate>
							<center>
								<button class="btn btn-primary" type="submit" style="margin-top: 15px;">Buscar</button>
							</center>
					</form>
				</div>
			</div>
			<!--Data de Mantenimiento En Proceso-->
			<div class="tab-pane" id="InProcess" role="tabpanel" aria-labelledby="InProcess-tab">
				<div class="container mt-4">
					<h2>Mantenimientos Activos</h2>
					<table class="table">
						<thead>
							<tr>
								<th>Fecha de inicio:</th>
								<th>Recibido por:</th>
								<th>Asignado a:</th>
								<th>Nivel de urgencia:</th>
								<th>Actividades a realizar:</th>
								<th>Finalizar:</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="contenedorT3">
										<p>7/05/2022 09:00</p>
									</div>
								</td>
								<td>Yihao Zheng</td>
								<td>Alex Sanchez</td>
								<td>
									<p>Urgente</p>
								</td>
								<td>- Hacer respaldo <br>- Formatear <br>- Instalar software básico </td>
								<td>
									<button class="btn btn-primary" type="submit" style="margin-top: 15px;">Finalizar</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- Fin de menu de Mantenimiento de Soporte -->
		<script src="/js/bootstrap.bundle.min.js"></script>
	</body>
</html>