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
	<body>
		<!-- Contenedor de barra principal --> 
        <?php include("../php/menu.php");?>
		<!-- MENU  -->
		<!-- Menu de Tareas de Soporte -->
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<!--Tab de tickets nuevos-->
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new" type="button" role="tab" aria-controls="new" aria-selected="true">Nuevo Ticket</button>
			</li>
			<!--Tab de reportes nuevos-->
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="newIncident-tab" data-bs-toggle="tab" data-bs-target="#newIncident" type="button" role="tab" aria-controls="newIncident" aria-selected="false">Nuevo Reporte</button>
			</li>
			<!--Tab de bandeja de tickets-->
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="inbox-tab" data-bs-toggle="tab" data-bs-target="#inbox" type="button" role="tab" aria-controls="inbox" aria-selected="false">Bandeja</button>
			</li>
			<!--Tab de tickets activos-->
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="active-tab" data-bs-toggle="tab" data-bs-target="#active" type="button" role="tab" aria-controls="active" aria-selected="false">Tickets Activos</button>
			</li>
			<!--Tab de tickets cerrados-->
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="closed-tab" data-bs-toggle="tab" data-bs-target="#closed" type="button" role="tab" aria-controls="closed" aria-selected="false">Tickets Cerrados</button>
			</li>
			<!--Tab de tickets bloqueados-->
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="blocked-tab" data-bs-toggle="tab" data-bs-target="#blocked" type="button" role="tab" aria-controls="blocked" aria-selected="false">Tickets bloqueados</button>
			</li>
			<!--Tab de incidentes activos-->
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="activeIncidents-tab" data-bs-toggle="tab" data-bs-target="#activeIncidents" type="button" role="tab" aria-controls="activeIncidents" aria-selected="false">Incidentes activos</button>
			</li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<!--Data de tickets nuevos-->
			<div class="tab-pane active" id="new" role="tabpanel" aria-labelledby="new-tab">
				<!-- Contenedor de solicitante -->
				<div class="contenedorT1">
					<h4>Información de solicitante.</h4>
					<form class="row g-5 needs-validation" novalidate>
						<div class="col-md-3">
							<label for="nombreSolicitante" class="form-label">Nombre de Solicitante</label>
							<input type="text" class="form-control" id="validationCustom01">
						</div>
						<div class="col-md-2">
							<label for="ubicacion" class="form-label">Ubicacion</label>
							<input type="text" class="form-control" id="validationCustom01">
						</div>
						<div class="col-md-2">
							<label for="telefono" class="form-label">Telefono</label>
							<input type="text" class="form-control" id="validationCustom01">
						</div>
						<div class="col-md-2">
							<label for="email" class="form-label">Correo Electronico</label>
							<input type="text" class="form-control" id="validationCustom01">
						</div>
						<div class="col-md-2">
							<label for="fechaRegistro" class="form-label">Fecha de Solicitud</label>
							<input type="text" class="form-control" id="validationCustom01" disabled>
						</div>
					</form>
				</div>
				<!-- Contenedor de equipo -->
				<div class="contenedorT2">
					<h4>Información del equipo.</h4>
					<form class="row g-4 needs-validation" novalidate>
						<div class="col-md-2">
							<label for="marcaEquipo" class="form-label">Marca del equipo</label>
							<select class="form-select form-select-sm" aria-label=".form-select-sm">
								<option selected>Seleccionar</option>
								<option value="1">DELL</option>
								<option value="2">ACER</option>
								<option value="3">HP</option>
								<option value="4">Apple</option>
								<option value="5">Lenovo</option>
								<option value="6">Otros</option>
							</select>
						</div>
						<div class="col-md-2">
							<label for="claveCatastral" class="form-label">Clave Catastral</label>
							<input type="number" class="form-control" id="validationCustom01">
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="textoAdicional">Informacion Adicional</label>
								<textarea class="form-control form-control-lg" id="FormControlTextarea1" placeholder="Capture todo lo posible referente a lo reportado." rows="3"></textarea>
							</div>
						</div>
					</form>
				</div>
				<!-- Contenedor de disponibilidad, aqui los dos div class, son uno para fecha y uno para hora -->
				<div class="contenedorT3">
					<h4>Disponibilidad - seleccione la fecha y hora que mejor se acomoden a sus horarios.</h4>
					<form class="row g-3 needs-validation" novalidate>
						<div class="col-md-2">
							<label for="fechaSolicitada" class="form-label">Fecha</label>
							<input type="date" class="form-control" id="validationCustom01">
						</div>
						<div class="col-md-2">
							<label for="horaSolicitada" class="form-label">Hora</label>
							<input type="time" class="form-control" id="validationCustom01">
						</div>
					</form>
				</div>
				<!-- Contenedor de botones de limpiar y enviar -->
				<div class="contenedorBotones">
					<form class="row g-3 needs-validation" novalidate>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="submit" style="margin-top: 15px; background: red;">Limpiar</button>
							</center>
						</div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="submit" style="margin-top: 15px;">Enviar orden</button>
							</center>
						</div>
					</form>
				</div>
			</div>
			<!--Data de reportes nuevos-->
			<div class="tab-pane" id="newIncident" role="tabpanel" aria-labelledby="newIncident-tab">
				<div class="contenedorT1">
					<h4>Información general y ubicacion de la falla.</h4>
					<form class="row g-5 needs-validation" novalidate>
						<div class="col-md-2">
							<label for="tipoFalla" class="form-label">Tipo de falla.</label>
							<select class="form-select form-select-sm" aria-label=".form-select-sm">
								<option selected>Seleccionar</option>
								<option value="1">Red general</option>
								<option value="2">Laboratorio en general</option>
								<option value="3">Equipo de laboratorio</option>
								<option value="4">Sistema eléctrico</option>
								<option value="5">Sistema de A/C</option>
								<option value="6">Proyectores</option>
								<option value="7">Otros</option>
							</select>
						</div>
						<div class="col-md-2">
							<label for="ubicacion" class="form-label">Ubicacion de la falla.</label>
							<select class="form-select form-select-sm" aria-label=".form-select-sm">
								<option selected>Seleccionar</option>
								<option value="1">Fallo general</option>
								<option value="2">Sala Audiovisual</option>
								<option value="3">Laboratorio 201</option>
								<option value="4">Laboratorio 202</option>
								<option value="5">Laboratorio 203</option>
								<option value="6">Laboratorio 204</option>
								<option value="7">Laboratorio 205</option>
								<option value="8">Laboratorio 206</option>
								<option value="9">Laboratorio 207</option>
								<option value="10">Laboratorio 208</option>
								<option value="11">Otras areas</option>
							</select>
						</div>
						<div class="col-md-2">
							<label for="fechaRegistro" class="form-label">Fecha de Reporte</label>
							<input type="text" class="form-control" id="validationCustom01" disabled>
						</div>
					</form>
				</div>
				<!-- Contenedor de equipo -->
				<div class="contenedorT2">
					<h4>Información detallada de la falla.</h4>
					<form class="row g-4 needs-validation" novalidate>
						<div class="col-md-4">
							<div class="form-group">
								<label for="textoAdicional">Informacion detallada.</label>
								<textarea class="form-control form-control-lg" id="FormControlTextarea1" placeholder="Describa la falla a detalle, incluyendo equipo dañado o en mal estado." rows="3"></textarea>
							</div>
						</div>
					</form>
				</div>
				<!-- Contenedor de botones de limpiar y enviar -->
				<div class="contenedorBotones">
					<form class="row g-3 needs-validation" novalidate>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="submit" style="margin-top: 15px; background: red;">Limpiar</button>
							</center>
						</div>
						<div class="col-3">
							<center>
								<button class="btn btn-primary" type="submit" style="margin-top: 15px;">Enviar orden</button>
							</center>
						</div>
					</form>
				</div>
			</div>
			<!--Data de bandeja de tickets-->
			<div class="tab-pane" id="inbox" role="tabpanel" aria-labelledby="inbox-tab">
				<div class="container mt-3">
					<h2>Bandeja de tickets</h2>
					<table class="table">
						<thead>
							<tr>
								<th>Fecha de solicitud:</th>
								<th>Numero de ticket:</th>
								<th>Reportado por:</th>
								<th>Nivel de urgencia:</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Hoy</td>
								<td>S123456</td>
								<td>Ejemplo</td>
								<td>Bajo</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--Data de tickets activos-->
			<div class="tab-pane" id="active" role="tabpanel" aria-labelledby="active-tab">
				<div class="container mt-3">
					<h2>Tickets Activos</h2>
					<table class="table">
						<thead>
							<tr>
								<th>Fecha de solicitud:</th>
								<th>Numero de ticket:</th>
								<th>Reportado por:</th>
								<th>Asignado a:</th>
								<th>Nivel de urgencia:</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Hoy</td>
								<td>S123456</td>
								<td>Ejemplo</td>
								<td>Soporte</td>
								<td>Bajo</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--Data de tickets cerrados-->
			<div class="tab-pane" id="closed" role="tabpanel" aria-labelledby="closed-tab">
				<div class="container mt-3">
					<h2>Tickets Cerrados</h2>
					<table class="table">
						<thead>
							<tr>
								<th>Fecha de solicitud:</th>
								<th>Numero de ticket:</th>
								<th>Reportado por:</th>
								<th>Cerrado por:</th>
								<th>Razon de cierre:</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Hoy</td>
								<td>S123456</td>
								<td>Ejemplo</td>
								<td>Soporte</td>
								<td>Completado</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--Data de tickets bloqueados-->
			<div class="tab-pane" id="blocked" role="tabpanel" aria-labelledby="blocked-tab">
				<div class="container mt-3">
					<h2>Tickets Cerrados</h2>
					<table class="table">
						<thead>
							<tr>
								<th>Fecha de solicitud:</th>
								<th>Numero de ticket:</th>
								<th>Reportado por:</th>
								<th>Asignado a:</th>
								<th>Razon de bloqueo:</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Hoy</td>
								<td>S123456</td>
								<td>Ejemplo</td>
								<td>Soporte</td>
								<td>Falta de acceso</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--Data de incidentes activos-->
			<div class="tab-pane" id="activeIncidents" role="tabpanel" aria-labelledby="activeIncidents-tab">
				<div class="container mt-3">
					<h2>Incidentes abiertos</h2>
					<table class="table">
						<thead>
							<tr>
								<th>Fecha de solicitud:</th>
								<th>Numero de incidente:</th>
								<th>Tipo de falla:</th>
								<th>Ubicacion:</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Hoy</td>
								<td>I123456</td>
								<td>Sistema de A/C</td>
								<td>Laboratorio 208</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- Fin de menu de Tareas de Soporte -->
		<script src="../js/bootstrap.bundle.min.js"></script>
	</body>
</html>