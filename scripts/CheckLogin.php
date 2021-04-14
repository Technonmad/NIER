<?php
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $password = md5($password."grejgijr434"); //добавили соль
    $connect = new mysqli('localhost', 'root', '','nier_database');

    if ($email != null && $password != null)
    {
        $result = $connect->query("select * from `accounts` where `Email` = '$email' and `Password` = '$password'");
        $user = $result->fetch_assoc();
        if(count($user) != 0)
        {
            setcookie("user", $user['Login'], time() + 3600, "/");
            header('Location: ../messages.php');
        }

    }
    
    $connect->close();
?>