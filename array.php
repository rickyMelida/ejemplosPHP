<?php

function saludo($nombre){
	echo "Bienvenido, ". $nombre. "<br/>";
	
	for ($i = 0; $i < strlen($nombre); $i++){
		$cadena[$i] = substr($nombre, $i, 1);
	}
	return $cadena;
}



echo "</br></br><hr></br>";


function Mostrar($opcion){
        $matriz=array();
        if ($opcion=="Frutas") {
	        $matriz[0]="banana";
	        $matriz[1]="manzana";
	        $matriz[2]="pera";
        }

        if ($opcion=="Numeros") {
	        $matriz[0]="uno";
	        $matriz[1]="dos";
	        $matriz[2]="dos";
        }


        return $matriz;
    }
    
    $matriz2=array();

    $matriz2=Mostrar("Numeros");
    echo $matriz2[0]."</br>";
    echo $matriz2[1]."</br>";
    echo $matriz2[2]."</br>";

