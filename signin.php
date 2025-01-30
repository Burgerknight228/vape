<?php
    $login = htmlspecialchars(trim($_POST['login']), ENT_QUOTES);
    $pass = htmlspecialchars(trim($_POST['pass']),ENT_QUOTES);

    $mysql = new mysqli('MySQL-8.2', 'root', '', 'vapenatione');
    $mysql ->query("INSERT INTO `users` (`name`, `password`)
    VALUES('$login', '$pass')");

    
?>