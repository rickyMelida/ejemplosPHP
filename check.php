<?php

  //$provincia=$_POST["provincias"];

  //intereses se va a guardar como una arreglo por eso se coloca null
    $provincias = isset($_POST['provincias']) ? $_POST['provincias'] : null;

    $arrayIntereses = null;

    $num_array = count($provincias);
    $contador = 0;

    foreach ($provincias as $key => $value) {
      echo "La provincia es :".$provincias." key es ".$key. " y el valor ".$value."<br>";
      $arrayIntereses .= $value. ' ';

    }

    echo $arrayIntereses;
    /*if($num_array > 0) {
        foreach($provincias as $key => $value) {
            if($contador != $num_array-1) {
                $arrayIntereses .= $value. ' ';
            }else {
                $arrayIntereses .= $value;
                $contador ++;
            }
        }
    }*/


?>
