<?php
	require "../model/usuarios.class.php";
	$objeto = new usuarios();
	echo "Id : ",$objeto->getId();
	echo $objeto->toString();

?>