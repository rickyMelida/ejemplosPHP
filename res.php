<?php

  $dato1 = $_POST['dato1'];
  $dato2 = $_POST['dato2'];
  $nombres = $_POST['nombres'];


    if(!empty($nombres)) {
      // Contando el numero de input seleccionados "checked" checkboxes.
      $contador = count($nombres);
      echo "<p>Has seleccionado los siguientes ".$contador." opcione(s):</p> <br/>";
      // Bucle para almacenar y visualizar valores activados checkbox.
      foreach($nombres as $seleccion) {
        echo "<p>".$seleccion ."</p>";
      }
    }else{
      echo "<p><b>Por favor seleccione al menos una opción.</b></p>";
    }



  $res = $_POST['result'];

?>
