<?php

$db_host = 'localhost:8889';
$db_name = 'test';
$db_user = 'root';
$db_pass = 'root';

try {
   $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // utile pour débuger
   $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); // permet de récupérer des objets php
   $db->exec("set names utf8");
} catch (PDOException $e) {
   print('Erreur : '.$e->getMessage().'<br/>'); // Affiche l’erreur s’il y en a
}

$sql = "SELECT * FROM users";
$query = $db->prepare($sql);
$query->execute();
$users = $query->fetchAll();


