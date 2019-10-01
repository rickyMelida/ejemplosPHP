<?php 
	$radio = $_POST['exampleRadios'];
	$check1 = $_POST['check1'];
	$check2 = $_POST['check2'];
	$selec = $_POST['select1'];
	$correo = $_POST['correo'];
	$selec2 = $_POST['select2'];
	$texto = $_POST['texto'];
	$hora = $_POST['hora'];

	$long_hora = strlen($hora);

	echo "El valor de radio es: ".$radio."<br>";
	echo "El valor de check1 es: ".$check1."<br>";
	echo "El valor de check2 es: ".$check2."<br>";
	echo "Se seleciono el: ".$selec."<br>";
	echo "El correo es: ".$correo."<br>";
	echo "Se seleciono el: ".$selec2."<br>";
	echo "Se texto seria: "."<br>".$texto. "<hr><br><br><br><br><br>";

	/*switch ($long_hora) {
		case 5:
			{
				if(){
					
				}
			}
			break;
		case 4:
			# code...
			break;
		case 3:
			# code...
			break;

		default:
			# code...
			break;
	}*/

?>
