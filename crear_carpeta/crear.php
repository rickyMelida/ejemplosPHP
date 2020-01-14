<?php
  $nombre = $_POST['nombre'];
  $dentro = 'otro';

  if(!file_exists($nombre)){
    if (mkdir($nombre, 0777) && chmod($nombre, 0777)) {
      echo "<script>alert('Se creo la carpeta');</script>";

    }else {
      echo "<script>alert('NO se pudo crear la carpeta');</script>";
    }
  }else {
    echo "<script>alert('La carpeta ya existe');</script>";
  }


  ///-----------Creando sub carpeta -------///
  if(!file_exists($nombre.'/'.$dentro)){
    if (mkdir($nombre.'/'.$dentro, 0777) && chmod($nombre.'/'.$dentro, 0777)) {
      echo "<script>alert('Se creo la subcarpeta');</script>";

    }else {
      echo "<script>alert('NO se pudo crear la subcarpeta');</script>";
    }
  }else {
    echo "<script>alert('La subcarpeta ya existe');</script>";
  }

    echo "<a href='index.php'>volver..</a>";
    setlocale(LC_TIME, "spanish");
echo strftime("%A, %d de %B de %Y");

    //header('Location: index.php');
?>
