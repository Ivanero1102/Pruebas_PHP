<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pruebas para Coche</title>
    </head>
    <body>
        <?php
        //Creo una variable en php
        $num = 0;
        ?>  
        <script type="text/javascript"> 
        //Creo la funcion prueba()
        function prueba(){
            var hi = 4 
            //Paso de variable desde php hasta js
            var e = "<?php echo $num ?>";
            //Comprueblo que la variable se ha pasado correctamente
            alert (e);
            //Inicio del paso de variable desde php js hasta php
            var a = 9;
            //El escrip introtuce la variable y el valor que quiero en la url

            window.location.href = window.location.href + "?w1=" + a;
            //De recogida hacer un array k pille siempre el ulto elemento del arrray o almacenar la href original en una variable
        }
        </script>
        <?php
        //Creo una sesion para poder guardar la informacion al refrescar la página
        session_start();
        //El if!isset me sirve para comprobar que aun el count no tiene valor
        if(!isset($_SESSION['count'])){
            //Le doy  valor a count
            $_SESSION['count']= 0;
            //Llamo a la funcion prueb()
            echo "<script> prueba() </script>";
        }else{
            if( $_SESSION['count'] >= 0){
                $_SESSION['count']++;
                //Tras el primer refresco agrego valor a la variable
                if($_SESSION['count'] == 1){
                    //Guardo la variable del $_GET en cache para poder comprobar k funciono
                    $_SESSION['js'] = $_GET["w1"];
                    // header("location:Piedra_Papel_Tijera_V1.php");
                }
                //Imprimo la variable pasada desde js para comprobar que funciono
                echo $_SESSION['js'];
            }
        }
        ?>
    </body>
</html>