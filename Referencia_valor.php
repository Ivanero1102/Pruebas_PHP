<?php
    function referencia(&$prueba1){
        $prueba1 --;
    }
    
    function valor($prueba2){
        $prueba2 --;
    }

    $prueba1 = 5;
    $prueba2 = 5;

    referencia($prueba1);
    valor($prueba2);
    echo "$prueba1 </br>";
    echo $prueba2;
?>