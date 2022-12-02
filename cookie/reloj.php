<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="reloj.css"/>
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_COOKIE['reloj'])) {
        setcookie('reloj', date("h:i:s"), time()+1);
    }else{
        setcookie('reloj', date("h:i:s"), time()+1);;
        header("Location:reloj.php");
    }
    echo "<p class='reloj'>".$_COOKIE['reloj']."</p>";
    echo "<p class='reloj'> Your time alive</p>";
    header("Refresh: 1; URL='reloj.php'");
    ?>
</body>
</html>