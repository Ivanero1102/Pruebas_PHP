<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio1</title>
    </head>
    <body>
        <?php
        $num = 0;
        ?>  
        <script type="text/javascript"> 
        function prueba(){
            var hi = 4 
            //Paso de variable desde php hasta js
            var e = "<?php echo $num ?>";
            //Comprueblo que la variable se ha pasado correctamente
            alert (e);
            //Inicio del paso de variable desde php js hasta php
            var a = 9;
            window.location.href = window.location.href + "?w1=" + a;
        }
        </script>
        <?php
        //Creo una sesion para poder guardar la informacion al refrescar la página
        session_start();
        //El if!isset me sirve para comprobar que aun el count no tiene valor
        if(!isset($_SESSION['count'])){
            //Le doy  valor a count
            $_SESSION['count']= 0;
            //El escrip introtuce la variable y el valor que quiero en la url
            echo "<script> prueba() </script>";
        }else{
            $_SESSION['count']++;
            //Tras el primer refresco agrego valor a la variable
            if($_SESSION['count'] == 1){
                //Guardo la variable del $_GET en cache para poder comprobar k funciono
                $_SESSION['js'] = $_GET["w1"];
            }
            //Imprimo la variable pasada desde js para comprobar que funciono
            echo $_SESSION['js'];
        }
        ?>
    </body>
</html>