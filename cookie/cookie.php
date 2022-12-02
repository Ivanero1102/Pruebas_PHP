<?php
if (isset($_COOKIE['visitas'])) {
    setcookie('visitas', $_COOKIE['visitas']+1, time()+10);
}else{
    setcookie('visitas',1, time()+10);
    header("Location:cookie.php");
}
echo $_COOKIE['visitas'];
?>