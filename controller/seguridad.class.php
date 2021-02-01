<?php
session_start();
if(!isset($SESSION['miSesion'])){
	header("location:../view/formLogin.html");
	exit();
}
?>