<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Juego_Coche.css"/>
        <!-- Funciones PHP -->
        <?php
            //Generar todo lo aleatorio
            function random(){
                $elementos = array();
                $num_coches = 1;
                $num_bombas = 10;
                $num_paredes = 10;
                $num_elementos = $num_coches + $num_bombas + $num_paredes;
                while(count($elementos)<=$num_elementos){
                    $comprobar= false;
                    $x = rand(0,9);
                    $y = rand(0,9);
                    for($i= 0;$i<=count($elementos);$i++){
                        if(){
                            $comprobar = true;
                        }
                    }
                    if($comprobar == true){
                        array_push($elementos ,[$x ,$y]); 
                    }
                }
                return $elementos;
            }
        ?>
    </head>
    <body>
        <table>
            <!-- Codigo php para general el tablero aleatorio -->
            <?php
                echo "<pre>";
                $elementos = random();
                print_r($elementos);
                echo "</pre>";
                for($i=0; $i<1; $i++){
                    $posy = 0;
                    for ($t=0; $t<10 ; $t++) {
                        $posx = 0;
                        echo "<tr>";
                        for ($s=0; $s <10 ; $s++) { 
                            echo "<td> x:$posx y:$posy</td>";
                            $posx++;
                        }
                        echo "</tr>";
                        $posy++;
                    }
                }
            ?>
        </table>
    </body>
</html>