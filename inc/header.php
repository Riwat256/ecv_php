<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">test</a></li>
            </ul>
        </nav>
        <?php if (isset($_SESSION['user'])) : ?>
            <h2>Bonjour <?= $_SESSION['user']['name'] ?></h2>
            <form action="">
                
            </form>
        <?php else : ?>
            <form action="./users/login.php" method="POST">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Mot de passe">
                <input type="submit" name="user_login" value="Connexion">
            </form>
        <?php endif; ?>
        
    </header>