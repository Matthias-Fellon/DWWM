<?php 
ob_start();
require_once "auth.php";
verifAdmin();

try{
    $pdo = getPDOConnexion();

    $stmt = $pdo->prepare('SELECT * FROM users');
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOException $e){
    die("Erreur de la BDD : " . $e->getMessage());
}

?>
<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Actions</th>
    </tr>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['nom']; ?></td>
            <td><?php echo $user['prenom']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['telephone']; ?></td>
            <td><a href="update.php?id=<?php echo $user['id']; ?>">Modifier</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
$content = ob_get_clean();
$titre = "Tous les utilisateurs";
require "template.php";
?>