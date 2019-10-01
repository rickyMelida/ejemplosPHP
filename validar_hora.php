<!DOCTYPE html>
<html>
<head>
	<title>Validar hora</title>
</head>
<body>


	<form id="formulario" method="Post">

		<input type="text" id="texto"/><br>
		<input type="button" name="enviar" value="Ver" id="btn" /><br>
		<div id="txt"></div>
	</form>
	<script>
 

		/*var hora = document.getElementById('texto').value;
		var res = document.getElementById('txt');
		var otra_hora = "20:30";
		
		//var horas = hora.substring(0, 2);
		var minutos = hora.substring(3, 5);*/

		document.getElementById('btn').addEventListener('click', recibir);


		function recibir(){
			var nombre = document.getElementById('texto').name = 'nombre';
        	var otro = document.getElementById("texto").value;  

			if(!isNaN(otro.substring(0,2))) {
				alert('Si es un numero');
			}else {
				alert('No, no es un numero ');
			}

    		document.getElementById("txt").innerHTML= "No Igual " + otro;        
        
    	} 

		function validarHorario(horario) {
			if (horario.charAt(2) == ":") {
				return true;
			} else {
				return false;
			}

		}
	</script>
</body>
</html>