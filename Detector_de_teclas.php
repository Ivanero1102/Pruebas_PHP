<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pruebas para Coche</title>
    </head>
    <body>
    <script type="text/javascript"> 
        window.onload = function(){
    var w = 87;
    var a = 65;
    var s = 83;
    var d = 68;
  
    window.onkeydown= function(movimiento){
        if(movimiento.keyCode == w){
            console.log("w");
            window.location.href = "http://localhost/Pruebas_PHP/Detector_de_teclas.php" + "?w1=" + "w";
        };
        if(movimiento.keyCode == a){
            console.log("a");
            window.location.href = "http://localhost/Pruebas_PHP/Detector_de_teclas.php" + "?w1=" + "a";
        };
        if(movimiento.keyCode == s){
            console.log("s");
            window.location.href = "http://localhost/Pruebas_PHP/Detector_de_teclas.php" + "?w1=" + "s";
        };
        if(movimiento.keyCode == d){
            console.log("d");

            window.location.href = "http://localhost/Pruebas_PHP/Detector_de_teclas.php" + "?w1=" + "d";
        };
    };
};  
    </script>
        <?php
            if(isset($_GET["w1"])){
                echo $_GET["w1"];
            }
            session_start();
            if(!isset($_SESSION['marcador'])){
                $_SESSION['marcador'] = 0;
            }else{
                $_SESSION['marcador']++;
            }
            echo $_SESSION['marcador'];
            if($_SESSION['marcador'] == 10){
                session_destroy();
            }
        ?>
    </body>
</html>