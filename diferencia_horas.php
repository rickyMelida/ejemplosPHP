<?php

# http://www.lawebdelprogramador.com

# tiene que recibir la hora inicial y la hora final



function RestarHoras($horaini,$horafin){

    
    $f1 = new DateTime($horaini);

    $f2 = new DateTime($horafin);

    $d = $f1->diff($f2);

    return $d->format('%H:%I:%S');

}



$horaini="10:05:20";

$horafin="14:05:20";

echo RestarHoras($horaini,$horafin); //Devolvera 04:00:00

?>
