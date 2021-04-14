<html>
    
    <head>
        <title> Переписька </title>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
    <form method="POST" action="scripts/sentMessage.php">
        <div class="msg_log">
            <?php require 'scripts/takeMessage.php'?>
        </div>
        <div id="online">
            Люди онлайн
        </div>
        <div id="online1">
            
        </div>
        <div class="msg">
            <textarea name="message" cols="5" rows="5" placeholder="Сообщение..."></textarea>
        </div>
        <div class="msg">
            <input type="submit" name="sent" value="Отправить">
        </div>
        <div class="msg">
            <p><a href="scripts/exit.php">Выйти</a></p>
        </div>
    </form>
    </body>
</html>