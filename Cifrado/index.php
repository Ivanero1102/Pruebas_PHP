<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cifrado.php" method="post">
        <label for="id">Id:</label>
        <input type="number" name="id" max="99999" min="1" required></input>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" maxlength="20" required></input>
        <p><input type="submit" name="login" value="Ingersar"></p>
    </form>
    <a href="nuevo.php" ><button>Crear usuario</button></a>
    <?php
    if(isset($_GET['msg'])){
        echo "<br>".$_GET['msg'];
    }
    ?>
</body>
</html>