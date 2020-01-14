

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Input</title>
  </head>
  <body>
    <h1>Input disabled</h1>
    <form class="" action="res.php" method="post">
      <label for="dato1">Dato 1</label>
      <input type="text" name="dato1" id="dato1"> <br> <br>
      <label for="dato1">Dato 2</label>
      <input type="text" name="dato1" id="dato2"><br> <br>
      <label for="dato1">Resultado: </label>
      <input type="text" name="res" id="res" disabled><br> <br>
      <input type="hidden" name="result" id="result">
      <input type="submit" id="btn" value="Enviar">
      <input type="checkbox" name="nombres[]" value="Ricardo Melida"> Ricardo
      <input type="checkbox" name="nombres[]" value="Miler Sosa"> Miler
      <input type="checkbox" name="nombres[]" value="Nicolas Acosta"> Nico

    </form>

    <script>



    function calculo() {
      var dato1 = document.getElementById('dato1').value;
      var dato2 = document.getElementById('dato2').value;

      if(isNaN(dato2) || isNaN(dato1)) {
        alert('No es un numero');
        document.getElementsByTagName('input')[0].select();
      }else {
        document.getElementById('res').value = parseInt(dato1) + parseInt(dato2);
        document.getElementById('result').value = parseInt(dato1) + parseInt(dato2);
      }
    }

    document.getElementById('btn').addEventListener('focusin', calculo);

    </script>
  </body>

</html>
