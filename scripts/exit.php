<?php
    setcookie("user", $user['Login'], time() - 3600, "/");
    header('Location: ../login.php');
?>
