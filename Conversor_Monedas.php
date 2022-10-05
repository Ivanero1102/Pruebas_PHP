<?php  

    $dinero = (int)$_GET['money'];
    $moneda = $_GET['moneda'];
    switch ($moneda) {
        case 'bitcoin':
            $nuevo_dinero = $dinero * 0.00012;
            echo "$dinero € equivalen a $nuevo_dinero ₿";
            break;
        case 'dolar':
            $nuevo_dinero = $dinero * 1.12;
            echo "$dinero € equivalen a $nuevo_dinero $";
            break;
        case 'libra':
            $nuevo_dinero = $dinero * 0.86;
            echo "$dinero € equivalen a $nuevo_dinero £";
            break;
        case 'yen':
            $nuevo_dinero = $dinero * 120.82;
            echo "$dinero € equivalen a $nuevo_dinero ¥";
            break;
    }
?>