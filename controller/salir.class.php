<?php
session_start();
//destruye la sesion de todos los usuarios
session_destroy();
//cierra la sesion del usuario actual
unset($_SESSION['miSesion']);
//la redireccionamos a la pagina principal
header("location:../index.html");
?>