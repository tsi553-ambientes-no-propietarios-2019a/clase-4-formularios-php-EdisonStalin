<?php
/**
 * Crear un arreglo asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre.
 El arreglo debe tener el formato
 [
    'juan' => 'contrasena_segura'
 ]
 Crear un formulario que permita ingresar el nombre de usuario y la contraseña. 
 Al enviar el formulario se debe validar que la combinación de nombre de usuario y contraseña existan en el arreglo.
 Si los datos no son correctos imprimir un mensaje de error.
 Si los datos son correctos debe redirigir a otra página bienvenido.php que debe imprimir el mensaje "Bienvendo JUAN". (con el nombre de usuario en mayúsculas)
 */

/*	
$name = 'Juan';
echo "Retornando la funcion : \n";
echo  '   '.User_pass($name);
*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<center><h1>Ecuela Politécnica Nacional</h1> </center>
	
</head>
<body>

<form method="post" action="formulario.php">
	
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

						<br>
						<button type="submit" class="btn btn-primary"> Enviar! </button>

					</center>

	
</form>


</body>
</html>



