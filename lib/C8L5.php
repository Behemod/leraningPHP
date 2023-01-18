<?php
    echo 'you are from: '.$_SERVER['HTTP_REFERER'].'<br>';
    $login=$_COOKIE['login']??false;
    $password=$_COOKIE['password']??false;
    if($login!=='Admin'||$password!=='123'){echo 'You are not authorized!';exit;}
    $x=htmlspecialchars($_POST['x']??false);
    $y=htmlspecialchars($_POST['y']??false);
    if(is_numeric($x)&&is_numeric($y)) echo $x+$y.'<br>';else echo 'error';
    echo '<br>';
?>