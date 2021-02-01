<?php
	require "../controller/ControllerUsuario.class.php";
	$ctr = new ControllerUsuario();
	//$ctr->agregar();
	$ctr->autentificar("david",sha1("David10_"));
?>
