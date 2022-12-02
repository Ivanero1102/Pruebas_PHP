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
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" maxlength="20" required></input>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" maxlength="20" required></input>
        <p><input type="submit" name="crear" value="Ingersar"></p>
    </form>
    <?php
    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }
    ?>
</body>
</html>