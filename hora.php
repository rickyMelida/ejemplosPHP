<?php 

	$mes = 2;   
	$dia   = 2;   
	$year  = 2018; 

	if (checkdate($mes, $dia, $year)) 
		echo "La fecha es válida <br>";
	else 
		echo "La fecha no es válida <br>";


	echo date("j/n/Y  G:i") . "<br>";




	/*se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
	if ($posicion_coincidencia === false) {
		echo "NO se ha encontrado la palabra deseada!!!!";
	} else {
		echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: ".$posicion_coincidencia;
	}*/



	$hora2 = "18:30";

	echo "La hora de hora2 es ". substr($hora2, 1,1); 

	if (val_hora($hora2)) {
		echo "<br><br><br>SIiiiii!!";
	}else {
		echo "<br><br><br>NOOO!!";
	}

	echo "<br> <hr><br>";


	$h_inicial = $_POST['h_inicial'];
	$h_final = $_POST['h_final'];




	function horas($hora) {
		$h = substr($hora, 0,2);
		$m = substr($hora, 3,5);
		$datos = array($h, $m);

		return $datos;
	}

	$hours_i = array();
	$hours_f = array();

	$hours_i = horas($h_inicial);
	$hours_f = horas($h_final);


	$hrs_i = $hours_i[0];
	$min_i = $hours_i[1];

	$hrs_f = $hours_f[0];
	$min_f = $hours_f[1];

	$hrs_h = $hrs_f - $hrs_i;
	$min_h = $min_f - $min_i;

	echo "Empezo a las ".$h_inicial."<br><br>";
	echo "Termino a las ".$h_final."<br><br>";

	echo "La diferencia es ".$hrs_h.":".$min_h;


	echo "<hr><br>";

	echo "la fecha actual es " . date("d") . " del " . date("m") . " de " . date("Y");


	function val_hora($horario) {

		//validamos la longitud del horario
		if (strlen($horario) <= 5 && strlen($horario>=3)) {
			$cond2 = true;
		}else {
			$cond2 = false;
		}

		//Validamos si el horario tiene los dos puntos
		switch (strpos($horario, ":")) {
			case 1:
				$cond = true;
				break;
			case 2:
				$cond = true;
				break;

			default:
				$cond = false;
				break;
		}



		//Retorno final
		if($cond && $cond2) {
			return true;

		}else {
			return false;
		}
	}

?>