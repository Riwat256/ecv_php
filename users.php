<?php

require_once('database.php');

// LOGIN

if (isset($_POST['user_login'])) {

    $password = hash('sha256', $_POST['password']);
    $data = [
        'email' => trim(htmlspecialchars($_POST['email'])),
    ];

    $sql = "SELECT * FROm users WHERE users.email = (:email)";
    $query = $db->prepare($sql);
    $query->execute($data);
    $user = $query->fetch();

    if (hash_equals($user->password, $password)) {
        session_start();
        $_SESSION['user']['name'] = $user->firstname;
        header('Location:http://localhost:8888/ecv_php/');
    }

    echo '<pre>',var_dump($user),'</pre>';
    die;
}