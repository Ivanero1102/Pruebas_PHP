<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Piedra_Papel_Tijera_V1.css"/>
        <?php
        
            session_start();
            error_reporting(0);
            function punto_jugador(&$jugador){
                $jugador++;
            }
            function punto_maquina(&$maquina){
                $maquina++;
            }
            function reinicio(){
                $_SESSION['maquina'] = 0;
                $_SESSION['jugador'] = 0;
                $_SESSION['eleccion_maquina'] = "";
                $_SESSION['eleccion_jugador'] = "";
                $_SESSION['random'] = 0;
            }
            function selector_jugador(){
                switch ($_SESSION['eleccion']) {
                    case 1:
                        $_SESSION['eleccion_jugador'] = "Piedra";
                        break;
                    case 2:
                        $_SESSION['eleccion_jugador'] = "Papel";
                        break;
                    case 3:
                        $_SESSION['eleccion_jugador'] = "Tijera";
                        break;
                }
            }
            function selector_maquina(){
                switch ($_SESSION['random']) {
                    case 1:
                        $_SESSION['eleccion_maquina'] = "Piedra";
                        break;
                    case 2:
                        $_SESSION['eleccion_maquina'] = "Papel";
                        break;
                    case 3:
                        $_SESSION['eleccion_maquina'] = "Tijera";
                        break;
                }
            }
        ?>
    </head>
    <body>
        <div class="contenedor">
            <h1>Piedra Papel o Tijera</h1>
        </div>
        <div class="contenedor">
            <h3>Mejor de 5</h3>
        </div>
        <div class="marcador">
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
                                <?php
                                    if(is_null($_SESSION['jugador']) == true){
                                        echo "0";
                                    }else{
                                    echo $_SESSION['jugador'];
                                    }
                                ?>
                            </th>
                            <th>
                                <?php
                                if(is_null($_SESSION['maquina']) == true){
                                        echo "0";
                                    }else{
                                    echo $_SESSION['maquina'];
                                    }
                                ?>                            
                            </th>
                        </tr>
                    </table>
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
            echo "<div class='contenedor'>";
            echo "JUGADOR: " .$_SESSION['eleccion_jugador']. " <br>";
            echo "MAQUINA: " .$_SESSION['eleccion_maquina']. " <br>";
        if ($_SESSION['eleccion']<4 && $_SESSION['eleccion']>0 && $_SESSION['random']<4 && $_SESSION['random']>0) {
         if ($_SESSION['eleccion'] == $_SESSION['random']) {
            echo "empate";
            }else{
            if(($_SESSION['eleccion']==1 and $_SESSION['random'] ==2) or ($_SESSION['eleccion']==2 and $_SESSION['random'] ==3) or ($_SESSION['eleccion']==3 and $_SESSION['random'] ==1)){
                echo "perdiste";
            }else{
                echo "ganaste";
            }
            echo "</div>";
            }
        }
            if ($_SESSION['maquina']== 3 ) {
                reinicio();
                echo '<script>document.location = "Piedra_Papel_Tijera_Perdiste.html"</script>';
            }else{
                if ($_SESSION['jugador'] == 3 ) {
                    reinicio();
                    echo '<script>document.location = "Piedra_Papel_Tijera_Ganaste.html"</script>';
                }
            }
             if(isset($_POST['PPT'])){
                $_SESSION['eleccion'] = (int)$_POST['PPT'];
                $_SESSION['random'] = rand(1,3);;
                $_SESSION['eleccion_maquina']= "";
                $_SESSION['eleccion_jugador']= "";
                selector_maquina();
                selector_jugador();
                if ($_SESSION['eleccion'] == $_SESSION['random']) {
                }else{
                    if(($_SESSION['eleccion']==1 and $_SESSION['random'] ==2) or ($_SESSION['eleccion']==2 and $_SESSION['random'] ==3) or ($_SESSION['eleccion']==3 and $_SESSION['random'] ==1)){
                        punto_maquina($_SESSION['maquina']);
                    }else{
                        punto_jugador($_SESSION['jugador']);
                    }
                }
                header("location:Piedra_Papel_Tijera_V1.php");
            }
        ?>
    </body>
</html>