<?php

  # http://www.lawebdelprogramador.com

  # tiene que recibir la hora inicial y la hora final


  function diff($h_ini, $h_fin) {
    $hor_ini= substr($h_ini, 0,2);
    $min_ini= substr($h_ini, 3, 2);
    $seg_ini= substr($h_ini, 6, 2);


    $hor_fin= substr($h_fin, 0,2);
    $min_fin= substr($h_fin, 3, 2);
    $seg_fin= substr($h_fin, 6, 2);

    $dif_hor = $hor_fin - $hor_ini;
    $dif_min = $min_fin - $min_ini;
    $dif_seg = $seg_fin - $seg_ini;

    $res = $dif_hor . ":" . $dif_min . ":" . $dif_seg;


    return $res;


  }

  function RestarHoras($horaini,$horafin){


      $f1 = new DateTime($horaini);

      $f2 = new DateTime($horafin);

      $d = $f1->diff($f2);

      return $d->format('%H:%I:%S');

  }



  $horaini="10:05:20";

  $horafin="14:05:20";

  echo RestarHoras($horaini,$horafin). "<br>"; //Devolvera 04:00:00
  echo diff($horaini, $horafin);

?>
