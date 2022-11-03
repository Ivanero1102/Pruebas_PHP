<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php  
        if(isset($_POST['limiteSuperior'])and isset($_POST['limiteInferior'])){
            if($_POST['limiteSuperior'] > $_POST['limiteInferior']){
            }else{
                header("location:limites.php?alerta=El limite superior tiene que ser mayor que el inferior");
            }
            $rand = rand($_POST['limiteInferior'] ,$_POST['limiteSuperior']);
            $min = $_POST['limiteInferior'];
            $max = $_POST['limiteSuperior'];
            $intentos = 0;
            $array = array("");
        }

        if(isset($_POST['num'])){
            $rand = $_POST['rand'];
            $array = $_POST['array'];
            array_push($array, $_POST['num']);
            $intentos = $_POST['intentos'];
            $min = $_POST['limiteInferior'];
            $max = $_POST['limiteSuperior'];
            $intentos ++;
            if($_POST['num'] > $rand){
                echo "Tu número introducido es mayor que el generado";
            }else{
            if($_POST['num'] < $rand){
                    echo "Tu número introducido es menor que el generado";
            }else{
                header("location:acierto.php?intentos=$intentos");
            }
            }    
        }
        ?>
        <form method="post" action="">
            <label for="num"> Introduce un numero: </label>
            <input type="number" name="num" min="<?php echo $min ?>" max="<?php echo $max ?>" required></input>
            <input type="hidden" name="rand" value="<?php echo $rand ?>">
            <input type="hidden" name="intentos" value="<?php echo $intentos ?>">
            <?php
            for ($i=0; $i < count($array); $i++) { 
                echo "<input type='hidden' name='array[]' value='$array[$i]'>";
            }
            ?>
            <input type="hidden" name="limiteInferior" value="<?php echo $min ?>">
            <input type="hidden" name="limiteSuperior" value="<?php echo $max ?>">
            <p><input type="submit" name="botonEnviar" value="comprobar"></p>
        </form>
        <p>Llevas <?php echo $intentos ?> intentos</p>
        <?php
        foreach ($array as $key => $value) {
            echo $value ."</br>";
        }
        ?>
    </body>
</html>