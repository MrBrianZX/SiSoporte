<?php

$HOST="fdb32.awardspace.net";
$USERNAME="4054769_soportedb";
$PASSWORD="a%c9_Ph-9VO!q0L!";
$DATABASE="4054769_soportedb";

$mysqli = new mysqli($HOST, $USERNAME, $PASSWORD, $DATABASE);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if ($result = $mysqli -> query("SELECT * FROM EQUIPOS")) {
  echo "Returned rows are: " . $result -> num_rows;
  echo "CONEXION EXITOSA!";

  // Free result set
  $result -> free_result();
}

$mysqli -> close();
?>