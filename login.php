<html>
    
    <head>
        <title> Логин </title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="reg">
            <form method="post" action="login.php">
            <h1>Вход</h1>
            <p>Логин:</p>
            <input type="text" name="login">
            <p>Пароль:</p>
            <input type="password" name="password">
            <br><input type="submit" value="Влетаем"></br>
            <br><a href="index.php">Еще не зарегестрированы?</a></br>
        </div>

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $connect = new mysqli($servername,$username,$password,"nier_database");

            
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