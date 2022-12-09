<?php

require_once('database.php');
include('inc/header.php');

if (isset($_POST['add_user'])) {

    $data = [
        'firstname' => trim(htmlspecialchars($_POST['firstname'])),
        'lastname' => trim(htmlspecialchars($_POST['lastname'])),
        'email' => trim(htmlspecialchars($_POST['email'])),
        'password' => hash('sha256', $_POST['password']),
    ];

    $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)";
    $query = $db->prepare($sql);
    $query->execute($data);
}

?>
    <section id="users">
        <h1>Ajouter un utilisateur</h1>
        <form method="POST">
            <input type="text" name="firstname" placeholder="Prénom">
            <input type="text" name="lastname" placeholder="Nom">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="submit" name="add_user" value="Ajouter l'utilisateur">
        </form>
    </section>

<?php
include('inc/footer.php');

    