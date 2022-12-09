<?php

include('inc/header.php');

?>
    <section id="users">
        <h1>Utilisateurs</h1>
        <a class="cta" href="create_user.php">Ajouter un utilisateur</a>
        <?php if (isset($users)) : ?>
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user) : ?>
                        <tr>
                            <td><?= $user->firstname ?></td>
                            <td><?= $user->lastname ?></td>
                            <td><?= $user->email ?></td>
                            <td><?= date('d/m/Y',strtotime($user->date_created)) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </section>

<?php
include('inc/footer.php');