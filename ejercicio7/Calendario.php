	<?php

	$meses = array(

		'0'=> 'Enero',
		'1'=> 'Febrero',
		'2'=> 'Marzo',
		'3'=> 'Abril',
		'4'=> 'Mayo',
		'5'=> 'Junio',
		'6'=> 'Julio',
		'7'=> 'Agosto',
		'8'=> 'Septiembre',
		'9'=> 'Octubre',
		'10'=> 'Noviembre',
		'11'=> 'Diciembre',	
	);
	$ContDesp =0;
	$Cont = 0;
 	$a = 1;
 	$definida =0;

	$dias = array('31','28','31','30','31','30','31','31','30','31','30','31');

	$dato = $_POST["dia"];

				for($i=0; $i<12; $i++){
					$Cont = $Cont + $dias[$i];
							//echo "$Cont <br>"; para verifiaar la posicicion del arreglo y su contenido
					$ContDesp = $Cont + $dias[$a];
							//echo "$ContDesp <br>"; para verificar si hace la suma entre dos numeros del array
						if($dato <= 31){
								if($dato <=0 || $dato >= 366){
									echo "El numero ingresado no esta dentro del rango de 1-365 (dias).";
								}else{
									echo "El mes según el numero ingresado es: ".$meses["$i"];	
														
									break;
									 }

						}elseif($dato> $Cont && $dato <= $ContDesp){

							echo "El mes según el numero ingresado es: ".$meses["$a"];
							break;
						}else{
							$a++;
						}
				}
			
			$definida = 365-$dato;
			if($definida<=5){
				echo "<br> Falta poco para el año nuevo";
				echo "<br> Dias: ".$definida;
			}else{
				
				 echo "<br> Aún faltan: ".$definida." dias, para que termine el año";
			}

	?>

