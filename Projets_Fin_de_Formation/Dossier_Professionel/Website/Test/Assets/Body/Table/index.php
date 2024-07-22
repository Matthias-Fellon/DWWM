<?php ob_start(); ?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Rôle</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="#">Modifier</a></td>
        </tr>
    </tbody>
</table>

<?php
$content = ob_get_clean();
$titre = "Voir les utilisateurs";
require  __DIR__ . "/template.php";