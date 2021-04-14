<?php
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $password = md5($password."grejgijr434"); //добавили соль
    $connect = new mysqli('localhost', 'root', '','nier_database');

    if ($email != null && $login != null && $password != null)
    {
        $connect->query("insert into `accounts`(`Login`,`Email`,`Password`) values('$login','$email','$password')");
        header('Location: ../thanks.php');
    }
    
    $connect->close();
?>