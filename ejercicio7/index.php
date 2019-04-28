<?php 
/*
Escribir código PHP que inicialice un arreglo con los números del 1 al 365. Determine a que mes pertenece el día del año. Y luego calcule cuántos días faltan para que se acabe el año con cada día del año, y muestre el mensaje “Falta poco para el año nuevo” solo si faltan menos de 5 días.
*/

?>



<!DOCTYPE html>
<html>
<head>
	<title>Calendario</title>
	<center><h1>Ecuela Politécnica Nacional</h1> </center>
	<center><text> <i>Ingrese un numero entre el 1-365</i> </text></center>
</head>
<body>

<form method="post" action="Calendario.php">
	
<center>
						<div>
							<label><i> <b> Calendario: </i> </b></label>


							<input type="numero" id="dayid" name="dia" required="required" placeholder="Ingrese el numero" >

						</div>
						<br>
						<button type="submit" class="btn btn-primary"> Enviar! </button>

					</center>

	
</form>


</body>

</html>