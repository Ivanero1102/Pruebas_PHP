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
    $fechaUno=new DateTime();
    $fechaDos=new DateTime('14:15');
    $dateInterval = $fechaUno->diff($fechaDos);
    echo $dateInterval->format("<p class='reloj'>Total: %H:%i:%s</p>").PHP_EOL;
    echo "<p class='reloj'> Tiempo hasta ser libre</p>";
    header("Refresh: 1; URL='reloj2.php'");
    ?>
</body>
</html>