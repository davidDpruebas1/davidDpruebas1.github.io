<?php
	require "ControllerUsuario.class.php";
	//iuna instancia
	$ctr = new ControllerUsuario();
	if (isset($_POST['remitir'])){
		$nombre = trim($_POST['nombre']);
		$email= trim($_POST['email']);
		$username= trim($_POST['username']);
		$password= trim($_POST['password']);
		//instancia usuario
		$usuario = new usuarios();
		$usuario->setNombre(trim($_POST['nombre']));
		$usuario->setEmail($email);
		$usuario->setUsername($username);
		$usuario->setPassword(sha1($Password));
		//guardar el objeto usuario
		$ctr->agregar($usuario);
	}else{
		header("location:../view/formLogin.html"); 
	}
?>