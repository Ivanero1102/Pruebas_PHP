<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio1</title>
    </head>
    <body>
        <!-- <script src="JavaScript.js"></script> -->
        <?php
        $num = 0;
        ?>  
        <script type="text/javascript"> 
        function prueba(){
            var hi = 4 
            var e = "<?php echo $num ?>";
            alert (e);
            var a = 9;
            window.location.href = window.location.href + "?w1 =" + a;
        }
        </script>
        <?php
        session_start();
        if(!isset($_SESSION['count'])){
            $_SESSION['count']= 0;
            echo "<script> prueba() </script>";
        }else{
            $_SESSION['count']++;
            if(isset($_GET["w1"])){
                $prueba = $_GET["w1"];
                echo $prueba;
            }
        } 

        ?>
    </body>
</html>