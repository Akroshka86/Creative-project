<?php
    
    $mail = filter_var(trim($_POST['mail']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']),
    FILTER_SANITIZE_STRING);


    $pass = md5($pass."abebe");

    $mysql = new mysqli('localhost:8889', 'root', 'root', 'reg3');


    $result = $mysql->query("SELECT * FROM `users` WHERE `mail` = '$mail' AND `pass` = '$pass'");
    
    $user = $result->fetch_assoc();
    if(count($user) == 0)
    {
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, "/");
    setcookie('user2', $user['mail'], time() + 3600, "/");
    setcookie('user3', $user['phone'], time() + 3600, "/");

    $mysql -> close();

    header('Location: /Профиль.php');










?>