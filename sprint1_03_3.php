<?php

    /*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
    La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat 
    com a segon paràmetre.

    Per exemple:

    Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/

    $words = array("hola", "Php", "Html");
    $caracter = "l";

    function serch(array $words, $caracter) {
        $control = "False";
        $wordsLower = array_map("strtolower" , $words); 
        $caracterLower = strtolower($caracter);
        for ($i =0; $i < count($wordsLower); $i++) {
            if (str_contains($wordsLower[$i], $caracterLower)) {
                $control = "True";
                
            } else {
                $control = "False";
                break;
            }
        }
        echo $control;
    }
    serch($words, $caracter);

    ##hacerlo tambien sin break.

?>