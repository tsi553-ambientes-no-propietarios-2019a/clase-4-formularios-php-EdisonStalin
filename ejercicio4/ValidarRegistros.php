<?php

$user = $_POST["Usuario"];
$pass = $_POST["Contraseña"];
$validar = $_POST["validar"];


		if($pass == $validar){
			header('Location: RegistroCorrecto.php');
		}else{
			echo "<script>alert('las Contraseñas no son iguales');</script>";
			header('Location: index.php');
			
		}




?>