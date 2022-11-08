<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Operacion de lectura</p>
    <?php
        $archivo = fopen("fichero1.txt", "r+b");
        if(!$archivo){
            echo "Error al abrir el archivo";
        }
        $cadena = fread($archivo, filesize("fichero1.txt"));
        echo $cadena;
        fwrite($archivo, "mañana");
        $pagina = file_get_contents("https://elpais.com/");
        echo $pagina;
        $aCadena = file("fichero1.txt");
        print_r($cadena);
        while(feof($archivo)==false){
            echo fgets($archivo);
        }
        fclose($archivo);
    ?>
</body>
</html>