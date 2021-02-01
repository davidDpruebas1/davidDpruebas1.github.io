<?php
	class Usuarios{
		//variables de clase
		private $id;
		private $nombre;
		private $email;
		private $username;
		private $password;
		private $estatus;
		private $fechaRegistro;

		/*
		metodo constructor
		*/

		public function __construct(){
			$this->id=0;
			$this->nombre;
			$this->email;
			$this->username;
			$this->password;
			$this->estatus=0;
			$this->fechaRegistro = date("Y-m-d");
		}
		/*
		metodos para modificar y recuperar
		*/
		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($email){
			$this->email = $email;
		}
		public function getUsername(){
			return $this->username;
		}
		public function setUsername($username){
			$this->username = $username;
		}
		public function getPassword(){
			return $this->password;
		}
		public function setPassword($password){
			$this->password = $password;
		}
		public function getEstatus(){
			return $this->estatus;
		}
		public function setEstatus($estatus){
			$this->id = $estatus;
		}
		public function getFechaRegistro(){
			return $this->fechaRegistro;
		}
		public function setFechaRegistro($fechaRegistro){
			$this->fechaRegistro = $fechaRegistro;
		}
		//metodo toString
		public function toString(){
			return "<br>Id = ".$this->id.
			"<br>Nombre = ".$this->nombre.
			"<br>Email = ".$this->email.
			"<br>Username = ".$this->username.
			"<br>Password = ".$this->password.
			"<br>Estatus = ".$this->estatus.
			"<br>FehcaRegistro = ".$this->fechaRegistro;
		}
	}

?>
