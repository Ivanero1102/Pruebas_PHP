<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Piedra_Papel_Tijera_V1.css"/>
        <?php
            function punto_jugador(&$jugador){
                $jugador++;
            }
            function punto_maquina(&$maquina){
                $maquina++;
            }
        ?>
    </head>
    <body>
        <div class="marcador">
            <?php
                $jugador = 0;
                $maquina = 0;
                echo "
                    <table>
                        <tr>
                            <th>
                                jugador:
                            </th>
                            <th>
                                maquina:                            
                            </th>
                        </tr>
                        <tr>
                            <th>
                                $jugador
                            </th>
                            <th>
                                $maquina                            
                            </th>
                        </tr>
                    </table>
                ";
            ?>
        </div>
        <div class="contenedor">
            <form method="post" action="Piedra_Papel_Tijera_V1.php">
                <p>Elija una opcion:<br></p>
                <select name="PPT">
                    <option value=1>Piedra</option>
                    <option value=2>Papel</option>
                    <option value=3>Tijera</option>
                </select>
                <p><input type="submit" name="botonEnviar" value="Enviar datos"></p>
            </form>
        </div>
        <?php
             if(isset($_POST['PPT'])){
                $eleccion = (int)$_POST['PPT'];
                $random = rand(1,3);
                $eleccion_maquina;
                $eleccion_jugador;
                switch ($random) {
                    case 1:
                        $eleccion_maquina = "Piedra";
                        break;
                    case 2:
                        $eleccion_maquina = "Papel";
                        break;
                    case 3:
                        $eleccion_maquina = "Tijera";
                        break;
                }
                switch ($eleccion) {
                    case 1:
                        $eleccion_jugador = "Piedra";
                        break;
                    case 2:
                        $eleccion_jugador = "Papel";
                        break;
                    case 3:
                        $eleccion_jugador = "Tijera";
                        break;
                }
                echo "JUGADOR: $eleccion_jugador <br>";
                echo "MAQUINA: $eleccion_maquina <br>";
                if ($eleccion == $random) {
                    echo "empate";
                }else{
                    if(($eleccion==1 and $random ==2) or ($eleccion==2 and $random ==3) or ($eleccion==3 and $random ==1)){
                        echo "perdiste";
                        punto_maquina($maquina);
                    }else{
                        echo "ganaste";
                        punto_jugador($jugador);
                    }
                }
             }
        ?>
    </body>
</html>