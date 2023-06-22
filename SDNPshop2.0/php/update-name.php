<?php
    
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."abebe");

    $mysql = new mysqli('localhost:8889', 'root', 'root', 'sdnp');
    $mysql -> query("INSERT INTO `users` (`login`, `name`, `pass`) VALUES('$login', '$name', '$pass')");
    
    $mysql -> close();

    header('Location: /Профиль.php');
?>
