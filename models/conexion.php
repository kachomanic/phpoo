<?php

	class Conexion{

		//PDO Connection func
		public function conectar(){

		  $link = new PDO("mysql:host=localhost;dbname=cursophp","kacho","gallopinto");
		  return $link;
		}

	}

?>
