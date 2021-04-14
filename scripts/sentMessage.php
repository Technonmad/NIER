<?php
    if(isset($_POST['sent']))
    {
        $login = $_COOKIE['user'];
        $message = $_POST['message'];
        
        if($message != '')
        {
            $connect = new mysqli('localhost', 'root', '','nier_database');
            $sent_message = $connect->query("insert into `messages`(`Data`, `Login`, `Message`) values (sysdate(), '$login', '$message')");
        }

        header('Location: ../messages.php');
    }
    
?>