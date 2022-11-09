<?php
$mysqli = new mysqli($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// Perform query
if ($result = $mysqli -> query("SELECT * FROM Persons")) {
  echo "Returned rows are: " . $result -> num_rows;
  echo "CONEXION EXITOSA!";

  // Free result set
  $result -> free_result();
}

$mysqli -> close();
?>