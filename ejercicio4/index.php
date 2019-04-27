<?php

/**
 * Problema Propuesto:
 * Desarrollar un formulario que simule el registro de un usuario (archivo index.php). 
 * El formulario debe solicitar el nombre de usuario y la clave en dos oportunidades. 
 * El formulario debe ser procesado por el archivo validarRegistro.php. Este archivo
 * debe implementar una función que permita validar si las dos contraseñas coinciden. 
 * Si las contraseñas coinciden, se debe redirigir al archivo "registroCorrecto.php"
 * Si las contraseñas no coinciden, se debe redirigir al index.php y mostrar el mensaje
 * "Las contrseñas no coinciden".
 */
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<center><h1>Ecuela Politécnica Nacional</h1> </center>
	
</head>
<body>

<form method="post" action="ValidarRegistros.php">
	
<center>
						<div>
							<label><i> <b> Usuario: </i> </b></label>

							<input type="text" id="userid" name="Usuario" required="required" placeholder="Ingrese Usuario" >

						</div>
						<br> 
						<div>
							<label> <i> <b> Contraseña: </i> </b></label> 
							<input type="password" name="Contraseña" required="required" placeholder="Ingrese Contraseña">
						</div>

						<div>
							<label> <i> <b>Contraseña: </i> </b></label> 
							<input type="password" name="validar" required="required" placeholder="Repita Contraseña">
						</div>

						<br>
						<button type="submit" class="btn btn-primary"> Enviar! </button>

					</center>

	
</form>


</body>
</html>