<?php
    
    
    setcookie('user', $user['name'], time() - 3600, "/");
    setcookie('user2', $user['mail'], time() - 3600, "/");
    setcookie('user3', $user['phone'], time() - 3600, "/");

    header('Location: /index.php');
?>