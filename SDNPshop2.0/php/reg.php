<?php
    
    $mail = filter_var(trim($_POST['mail']),
    FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);


    if(mb_strlen($mail) < 5 || mb_strlen($mail) > 90) {
        echo "Недопустимая длина почты";
        exit();
    }
    else if(mb_strlen($name) < 3 || mb_strlen($name) > 50) {
        echo "Недопустимая длина имени";
        exit();
    }
    else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 6) {
        echo "Недопустимая длина пароля (от 2 до 6 символов)";
        exit();
    }
    

    $pass = md5($pass."abebe");

    $mysql = new mysqli('localhost:8889', 'root', 'root', 'reg3');
    $mysql -> query("INSERT INTO `users` (`mail`, `phone`, `name`, `pass`) VALUES('$mail', '$phone', '$name', '$pass')");
    
    $mysql -> close();

    header('Location: /index.php');
?>



