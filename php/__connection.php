<?php

$__HOSTNAME = 'fdb32.awardspace.net';
$__DATABASE = '4054769_soportedb';
$__USERNAME = '4054769_soportedb';
$__PASSWORD = 'brpcJamq.ypXUK4';

$__PORT    = '3306';

$__CON = new mysqli($__HOSTNAME, $__USERNAME  , $__PASSWORD  , $__DATABASE , $__PORT);

if (mysqli_connect_errno()){
	die(mysqli_connect_error());
}