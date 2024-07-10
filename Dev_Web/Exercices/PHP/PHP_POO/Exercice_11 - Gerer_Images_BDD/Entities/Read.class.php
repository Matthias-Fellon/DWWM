<?php
ob_start();
require_once __DIR__ . "/Auth.class.php";
require_once __DIR__ . "/User.class.php";

Auth::verifyAdmin();

$users = User::getAllUsersWithRoles();

function afficherImage($nomImage){
    if($nomImage == "") { 
        echo "<p>Image manquante</p>";
    } else {
        if(file_exists("../Public/Images/$nomImage")) {
            echo "<img name=\"imageProfil\" src=\"../Public/Images/$nomImage\" width=\"50\" height=\"50\">";
        }
    }
}
?>

<table border="1">
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
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo htmlspecialchars($user['id']); ?></td>
        <td><?php afficherImage($user['nomImage']); ?></td>
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
require __DIR__ . "/../Public/template.php";
?>
