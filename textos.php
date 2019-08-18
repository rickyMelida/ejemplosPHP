<?php
    $texto = $_POST["hoja"];

    $abierto = fopen("archivo.txt", "a");
    echo "sale " . $texto;

    fwrite($abierto, $texto);

    fclose($abierto);
?>