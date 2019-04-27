<?php

$user = $_POST["Usuario"];
$pass = $_POST["Contraseña"];





		 $PASSWORD = array(
		 	'Juan' => 'Contraseña123',
		 	'Edison' => 'pass',
		 	'Christiam' => 'PapiCR7',
		 	'Jose' => 'tecnico123',
		 	'H-omar' => '123',

		 	);
		

	if($PASSWORD["$user"] == $pass){
		
		echo "BIENVENIDO!!!!!!! <br>".$user;

	}else{
		echo 'Error!!!';
	}



?>
