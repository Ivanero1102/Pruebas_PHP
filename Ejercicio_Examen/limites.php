<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="post" action="jugada.php">
            <label for="limiteInferior"> Limite inferior: </label>
            <input type="number" name="limiteInferior" min="0" required></input>
            <label for="limiteSuperior"> Limite superior: </label>
            <input type="number" name="limiteSuperior" min="1" required></input>
            <p><input type="submit" name="botonEnviar" value="jugar"></p>
        </form>
        <?php
        if(isset($_GET['alerta'])){
            echo $_GET['alerta'];
        }
        ?>
    </body>
</html>