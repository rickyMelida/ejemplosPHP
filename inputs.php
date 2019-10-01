<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Ejemplo Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<h1 class="text-center">Inputs Varios</h1>
		<form action="leerinput.php" method="post">

			<h2>Radio Button</h2>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="radio1" checked>
				<label class="form-check-label" for="exampleRadios1">
				Radio 1
				</label>

			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="radio2">
				<label class="form-check-label" for="exampleRadios2">
				Radio 2
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="radio3" disabled>
				<label class="form-check-label" for="exampleRadios3">
				Radio 3 - Deshabilitado
				</label>
			</div>
			<hr>


			<h2>Check Box</h2>
			<div class="form-check">
				<input class="form-check-input" name = "check1" type="checkbox" value="check1" id="defaultCheck1">
				<label class="form-check-label" for="defaultCheck1">
				Checkbox 1
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" name = "check2" type="checkbox" value="check2" id="defaultCheck2" >
				<label class="form-check-label" for="defaultCheck2">
				Checkbox 2
				</label>
			</div>
			<hr>

			<h2>Select - Option</h2>
			<div class="form-group">
			    <label for="exampleFormControlSelect1">Selecciona</label>
			    <select class="form-control" name="select1" id="exampleFormControlSelect1">
					<option>Uno</option>
					<option>Dos</option>
					<option>Tres</option>
					<option>Cuatro</option>
					<option>Cinco</option>
			    </select>
			 </div>
			 <hr>

			 <h2>Texto  - Email</h2>
			 <div class="form-group">
				<label for="exampleFormControlInput1">Direccion Email</label>
				<input type="email" class="form-control" name="correo" id="exampleFormControlInput1" placeholder="correo@correo.com">
			</div>
			<hr>

			<h2>Select - Option</h2>
			<div class="form-group">
				<label for="exampleFormControlSelect2">Ejemplo multiple select</label>
				<select multiple class="form-control" name="select2" id="exampleFormControlSelect2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<hr>

			<h2>Text - Tarea</h2>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Ejemplo textarea</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="texto" rows="3"></textarea>
			</div>
			<hr><br><br>
			<div class="form-group">
				<label>Ingrese la hora</label> <br>
				<input type="text" name="hora" >
			</div>
			<input type="submit" value="Enviar">	
		</form>
	</div>
	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>