<?php

    if(isset($_POST['submit'])) {

        $horaini=$_POST['h_inicio'];

        $horafin=$_POST['h_fin'];

        echo "Las horas hombre son: ".$horaini."<br>";
        echo "Las horas objetivo son: ".$horafin."<br>";

        echo diff($horaini, $horafin);
        //echo RestarHoras($horaini,$horafin). "<br>"; //Devolvera 04:00:00

    }
  # http://www.lawebdelprogramador.com

  # tiene que recibir la hora inicial y la hora final


  function diff($h_ini, $h_fin) {

    //------------Se separan las los tiempos de la hora inicial
    //Si es la hora tiene mas de dos digitos entonces seleccionas los tres primeros caracteres
    if(strlen($h_ini) > 8) {
        $hor_ini= substr($h_ini, 0,3);
        $min_ini= substr($h_ini, 4, 2);
        $seg_ini= substr($h_ini, 7, 2);
    }else {
        $hor_ini= substr($h_ini, 0,2);
        $min_ini= substr($h_ini, 3, 2);
        $seg_ini= substr($h_ini, 6, 2);
    }




    //----Se separan las los tiempos de la hora final
    //Si es la hora tiene mas de dos digitos entonces seleccionas los tres primeros caracteres
    if(strlen($h_fin) > 8) {
        $hor_fin= substr($h_fin, 0,3);
        $min_fin= substr($h_fin, 4, 2);
        $seg_fin= substr($h_fin, 7, 2);
    }else {
        $hor_fin= substr($h_fin, 0,2);
        $min_fin= substr($h_fin, 3, 2);
        $seg_fin= substr($h_fin, 6, 2);
    }
    

    //Se resuelve conflicto entre difencia de horas
    if($min_fin < $min_ini) {
        $min_fin = 60;
        $hor_fin = $hor_fin - 1;
    }


    //----------------Diferencia entre ambos tiempos
    $dif_hor = $hor_fin - $hor_ini;
    $dif_min = $min_fin - $min_ini;
    $dif_seg = $seg_fin - $seg_ini;
    
    //----------Si uno de los resultados sea negativo lo redondeamos
    if($dif_hor < 0) {
        $dif_hor = $dif_hor * (-1);
    }
    if($dif_min < 0) {
        $dif_min = $dif_min * (-1);
    }
    if($dif_seg < 0) {
        $dif_seg = $dif_seg * (-1);
    }

    
    //Agregamos un cero delante si es un numero menor a 10
    if($dif_hor < 10) {
        $dif_hor = (0 . $dif_hor);    
    }
    if($dif_min < 10) {
        $dif_min = (0 . $dif_min); 
    }
    if($dif_seg < 10) {
        $dif_seg = (0 . $dif_seg);    
    }


    //Concatenamos todos los datos
    $res = $dif_hor . ":" . $dif_min . ":" . $dif_seg;


    return $res;


  }

  function RestarHoras($horaini,$horafin){


      $f1 = new DateTime($horaini);

      $f2 = new DateTime($horafin);

      $d = $f1->diff($f2);

      return $d->format('%H:%I:%S');

  }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <p>
            <label for="h_inicio">Horas Alcanzada</label> <br>
            <input type="text" name="h_inicio" id="">
        </p>
        <p>
            <label for="h_fin">Horas Objetivo</label> <br>
            <input type="text" name="h_fin" id="">
        </p>
        <p>
            <input type="submit" value="Enviar" name="submit">
        </p>
    </form>
    <?php ?>
</body>
</html>