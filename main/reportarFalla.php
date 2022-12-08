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
		<?php include("../php/menu.php");?> <!-- MENU  -->
		<div class="contenedor">
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
        </div>
	</body>
	<script src="/js/bootstrap.bundle.min.js"></script>
</html>