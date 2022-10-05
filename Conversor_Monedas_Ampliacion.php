<?php  

    $dinero = $_GET['money'];
    //print_r($_GET);
    //echo $_GET['moneda'][0];
    foreach($_GET['moneda'] as $valor => $number){
        switch ($number) {
            case 'bitcoin':
                $nuevo_dinero = $dinero * 0.00012;
                echo "$dinero € equivalen a $nuevo_dinero ₿ <br>";
                break;
            case 'dolar':
                $nuevo_dinero = $dinero * 1.12;
                echo "$dinero € equivalen a $nuevo_dinero $ <br>";
                break;
            case 'libra':
                $nuevo_dinero = $dinero * 0.86;
                echo "$dinero € equivalen a $nuevo_dinero £ <br>";
                break;
            case 'yen':
                $nuevo_dinero = $dinero * 120.82;
                echo "$dinero € equivalen a $nuevo_dinero ¥ <br>";
                break;
        }
    }
?>