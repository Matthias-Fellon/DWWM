<?php
    ob_start();
    require_once "auth.php";

    $pdo = getPDOConnexion();
    $infoUsers = $pdo->prepare('SELECT * FROM users JOIN userroles WHERE users.id=userroles.user_id');
    $infoUsers->execute();
?>  

<table>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Email</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Rôle</th>
            <th collapse="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($infoUsers as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nom']  ?></td>
            <td><?= $user['prenom'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['telephone'] ?></td>
            <td><?= $user['role'] ?></td>
            <td><a href="update.php?id=<?= $user['id'] ?>">Modifier</a></td>
            <td><a href="delete.php?id=<?= $user['id'] ?>">Supprimer</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
    $content = ob_get_clean();
    $titre = "Gestion des utilisateurs";
    require "template.php";
?>