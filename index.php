<html>
    
    <head>
        <title> Регистрация </title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="reg">
            <form method="POST" action="index.php">
                <h1>Регистрация</h1>
                <p>E-mail:</p>
                <input type="email" name = "email" placeholder="ivan_ivanov@mail.ru">
                <p>Логин:</p>
                <input type="text" name="login">
                <p>Пароль:</p>
                <input type="password" name="password">
                <br><input type="submit" value="Зарегестрироваться" name="submit_button"></br>
                <br><a href="login.php">Уже есть аккаунт?</a></br>
            </form>
        </div>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $connect = new mysqli($servername,$username,$password,"nier_database");

            if ($connect->connect_errno)
            {
                echo "Ошибка на сайте ";
                echo "Номер ошибки: ".$connect->connect_errno."\n";
                echo "Ошибка: ".$connect->connect_error."\n";
                exit;
            }

            if (isset($_POST['email']) && isset($_POST['login']) && isset($_POST['password']))
            {
                $email = $_POST['email'];
                $login = $_POST['login'];
                $password = $_POST['password'];

                $sql = "insert into accounts (Login, Email, Password) values ('$login', '$email', '$password')";
                

                if ($connect->query($sql))
                    header('Location: thanks.php');
                else
                    echo "Error: " . $sql . "<br>" . $connect->error;;
            }
        ?>

        <footer>
            Work again
            <br>2018 - 2021
            <br>Все права, мб защищены
            <br>я не знаю
            <br><a href="https://discord.com"><img src="img/boba.png"></a>
            <a href="https://twitter.com"><img src="img/twitter.png"></a>
            <a href="https://instagram.com"><img src="img/inst.png"></a>
        </footer>
    </body>
</html>