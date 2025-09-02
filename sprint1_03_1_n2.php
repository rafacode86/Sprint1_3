<?php
    /*Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, 
    mostra per pantalla el resultat de:

    La intersecció dels dos arrays (nombres en comú)
    La mescla dels dos arrays.*/

    $array1 = [2, 4, 3.5, 5, 6];
    $array2 = [3, 4, 3.5, 7, 8];

    $arrayIntersection = array_intersect($array1, $array2);
    print_r($arrayIntersection);

    echo("----------------------------------\n");

    $arrayUnion = array_merge($array1, $array2);
    print_r($arrayUnion);
?>