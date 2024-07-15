<?php ob_start(); ?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Image de profil</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Rôle</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo htmlspecialchars($user['id']); ?></td>
        <td>
            <?php
                $imagePath = '../public/images/' . (isset($user['nomImage']) ? htmlspecialchars($user['nomImage']) : 'default.png');
            ?>
            <img src="<?php echo $imagePath; ?>" alt="Image de <?php echo htmlspecialchars(isset($user['nom']) ? $user['nom'] : 'défault') ?>">
        </td>
        <td><?php echo htmlspecialchars($user['nom']); ?></td>
        <td><?php echo htmlspecialchars($user['prenom']); ?></td>
        <td><?php echo htmlspecialchars($user['email']); ?></td>
        <td><?php echo htmlspecialchars($user['telephone']); ?></td>
        <td><?php echo htmlspecialchars($user['role']); ?></td>
        <td><a href="Update.class.php?id=<?php echo $user['id']; ?>">Modifier</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
$content = ob_get_clean();
$titre = "Voir les utilisateurs";
require "template.php";
?>