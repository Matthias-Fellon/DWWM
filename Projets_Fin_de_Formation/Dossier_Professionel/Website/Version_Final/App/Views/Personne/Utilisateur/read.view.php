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
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo htmlspecialchars($user['ID_Personne']); ?></td>
            <td>
                <?php 
                $imagePath = '../public/images/' . (isset($user['Image_Profil']) ? htmlspecialchars($user['Image_Profil']) : 'defaut.png');
                ?>
                <img src="<?php echo $imagePath; ?>" alt="Image de <?php echo htmlspecialchars(isset($user['Nom']) ? $user['Nom'] : 'Nom inconnu'); ?>" width="40">
            </td>
            <td><?php echo htmlspecialchars(isset($user['Nom']) ? $user['Nom'] : 'Nom inconnu'); ?></td>
            <td><?php echo htmlspecialchars(isset($user['Prenom']) ? $user['Prenom'] : 'Prénom inconnu'); ?></td>
            <td><?php echo htmlspecialchars($user['Email']); ?></td>
            <td><?php echo htmlspecialchars(isset($user['Telephone']) ? $user['Telephone'] : 'Téléphone inconnu'); ?></td>
            <td><?php echo htmlspecialchars(isset($user['Role']) ? $user['Role'] : 'Rôle inconnu'); ?></td>
            <td><a href="<?= URL ?>update/<?php echo $user['ID_Personne']; ?>">Modifier</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
$content = ob_get_clean();
$titre = "Voir les utilisateurs";
require  __DIR__ . "/../template.php";
