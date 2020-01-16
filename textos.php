<?php
    $texto = $_POST["hoja"];

    $abierto = fopen("archivo2.txt", "a");
    echo "sale " . $texto;

    fwrite($abierto, $texto);

    fclose($abierto);
?>