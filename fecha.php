<?php

// Obteniendo la fecha actual del sistema con PHP
  $fechaActual = date('s');
  $fechaActual2 = date('d-m-Y H:i:s');
  echo $fechaActual."<br/>";

  $fecha = gmmktime(date(H), date(i), date(s), date(m), date(d), date(Y));
  echo $fechaActual2;


  echo "<hr/>";


  $miFecha= gmmktime(12,0,0,1,15,2089);

  echo 'Antes de setlocale strftime devuelve: '.strftime("%A, %d de %B de %Y", $miFecha).'<br/><br/><br/>';

  echo 'Antes de setlocale date devuelve: '.date("l, d-m-Y (H:i:s)", $miFecha).'<br/><br/><br/>';

//--------------------------------------
  echo "<hr/>";

  setlocale(LC_TIME,"es_ES");

  echo 'Después de setlocale es_ES date devuelve: '.date("l, d-m-Y (H:i:s)", $miFecha).'<br/><br/><br/>';

  echo 'Después de setlocale es_ES strftime devuelve: '.strftime("%A, %d de %B de %Y", $miFecha).'<br/><br/><br/>';

//----------------------------------------------------------------------
  echo "<hr/>";

  setlocale(LC_TIME, 'es_ES.UTF-8');

  echo 'Después de setlocale es_ES.UTF-8 date devuelve: '.date("l, d-m-Y (H:i:s)", $miFecha).'<br/><br/><br/>';

  echo 'Después de setlocale es_ES.UTF-8 strftime devuelve: '.strftime("%A, %d de %B de %Y", $miFecha).'<br/><br/><br/>';

//------------------------------------------------------------------
  echo "<hr/>";


  setlocale(LC_TIME, 'de_DE.UTF-8');

  echo 'Después de setlocale de_DE.UTF-8 date devuelve: '.date("l, d-m-Y (H:i:s)", $fecha).'<br/><br/><br/>';

  echo 'Después de setlocale de_DE.UTF-8 strftime devuelve: '.strftime("%A, %d de %B de %Y", $fecha).'<br/><br/><br/>';

?>
