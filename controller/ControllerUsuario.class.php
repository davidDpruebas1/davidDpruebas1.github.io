<?php session_start();
?>
<?php
	require "../service/UsuariosServiceImp.class.php";
	require "../model/usuarios.class.php";

	class ControllerUsuario{

		/*public function agregar(){
			$usuario = new usuarios();
			$UserService = new UsuariosServiceImp();
			//modificar losa datos del objeto usuario
			$usuario->setNombre("David");
			$usuario->setEmail("davidc@gmail.com");
			$usuario->setUsername("david");
			$usuario->setPassword(sha1("David10_"));
			$usuario->setFechaRegistro(date("Y-m-d"));
			//llamado del metodo guardar de la clase de servicio
			$UserService->guardar($usuario);
			//lo envio a la vista de autentificacion
			//header("location:../view/formLogin.html");
		}*/
		public function agregar($usuario){
			$userService = new UsuariosServiceImp();
			$userService->guardar($usuario);
			header("location:../view/formLogin.html");
		}
		public function autentificar($username,$password){
			$userService = new UsuariosServiceImp();
			$usuario = new Usuarios();
			$usuario = $userService->buscarPorUsernamePassword($username,$password);
			if(is_object($usuario)){
				//echo "<br>Este Usuario si es valido";
				//varias variables de sesion
				//arreglo asociativo
				/*$_SESSION['nombre'] = $usuario->getNombre();
				$_SESSION['CORREO'] = $USUARIO->GETeMAIL();*/
				$_SESSION['miSesion']=array();
				$_SESSION['miSesion']['nombre']=$usuario->getNombre();
				$_SESSION['miSesion']['correo']=$usuario->getEmail();
				$_SESSION['miSesion']['id']=$usuario->getId();
				//echo "Bienvenido : ".$_SESSION['miSesion']['nombre']
				header ("location:../view/productos.class.php");
			}else{
				//echo "<br>Este usuario no existe en la base de datos";
				header("location:../view/formLogin.html");
			}
		}
	}
?>
