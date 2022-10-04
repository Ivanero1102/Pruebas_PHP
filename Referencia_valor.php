<?php
    function referencia(&$prueba1){
        $prueba1 --;
    }
    
    function valor($prueba2){
        $prueba2 --;
    }

    $prueba1 = 5;
    $prueba2 = 5;

    echo "referencia: $prueba1 </br>";
    echo "valor: $prueba2 </br>";

    echo "Se ejecuta la funcion referencia que resta 1 </br>";
    referencia($prueba1);
    echo "Se ejecuta la funcion valor que resta 1 </br>";
    valor($prueba2);

    echo "referencia: $prueba1 </br>";
    echo "valor: $prueba2";
?>