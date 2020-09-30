<?php

// Array de nombres
$a = array ('Sara','Imanol','Dani','Antonio','David','Igor','Naroa','Christian',
'Joseba','Angel','Alex','Dumitru','Mikel','Ivan','Martin');

// Capturar el valor del input procedente de la URL

$nombre = $_REQUEST['nombre'];
$sugerencia ='';

if ($nombre!==""){
    $nombre = strtolower($nombre); //Pasamos el nombre a minusculas
    $long = strlen($nombre); // Capturamos la longitud

    foreach ($a as $nom) { // Cada elemento del array lo pasa a $nom en cada iteracion

        if (stristr($nombre,substr($nom,0, $long))){ //Si coincide la cadena pasada con
        // los primeros caracteres del array
    
    if ($sugerencia===""){

        $sugerencia = $nom;
    }
else {

    $sugerencia = "$sugerencia , $nom";
}
}
    }
}
if ($sugerencia==="")
    echo "No hay sugerencias";
else 
    echo $sugerencia;
?>