	<?php


		

			function diasfaltantes($dato,$definida){

				if($dato <1 || $dato > 365){
									echo "El numero ingresado no esta dentro del rango de 1-365 (dias).";
									

						}elseif($definida<=5){
								echo "<br> Falta poco para el año nuevo";
								echo "<br> Dias: ".$definida;
					}else{
				
				 echo "<br> Aún faltan: ".$definida." dias, para que termine el año";
					}
			}

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
	$definida = 365-$dato;
				for($i=0; $i<12; $i++){
					$Cont = $Cont + $dias[$i];
							//echo "$Cont <br>"; para verifiaar la posicicion del arreglo y su contenido
					$ContDesp = $Cont + $dias[$a];
							//echo "$ContDesp <br>"; para verificar si hace la suma entre dos numeros del array
						
					if($dato <1 || $dato > 365 ||$dato == " "){
									//echo "El numero ingresado no esta dentro del rango de 1-365 (dias).";
									echo "<br>".diasfaltantes($dato,$definida);
									break;

						}elseif($dato <= 31){
									echo "El mes según el numero ingresado es: ".$meses["$i"];	
									echo "<br>".diasfaltantes($dato,$definida);					
									break;
									 

						}elseif($dato> $Cont && $dato <= $ContDesp){

							echo "El mes según el numero ingresado es: ".$meses["$a"];
								echo "<br>".diasfaltantes($dato,$definida);	
							break;
						}else{
							$a++;
						}
				}
			


	?>

