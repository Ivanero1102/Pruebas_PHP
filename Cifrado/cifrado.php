<?php
//password_hash(contraseña, algoritmo que vamos a usar, salt ya no se usa , cost o vueltas que da el algoritmo)
$contraseña = "Hola";
$cifrado = password_hash($contraseña, PASSWORD_DEFAULT);
echo $cifrado;
echo "<br>";
echo $contraseña;
echo "<br>";
$prueba = [password_hash("Hola", PASSWORD_DEFAULT), password_hash("HOLA", PASSWORD_DEFAULT)];
foreach ($prueba as $key => $value) {
    if(password_verify($contraseña, $value)){
        echo "Verificado";
        echo "<br>";
    }else{
        echo "Error";
        echo "<br>";
    }
}
?>