<?php
ob_start();
require_once "auth.php";

verifAdmin();

if(isset($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['telephone'],$_POST['role'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $role = $_POST['role'];

    $pdo = getPDOConnexion();

    $stmt = $pdo->prepare('INSERT INTO users(nom, prenom,email,telephone) VALUES (?, ?, ?, ?)');
    $stmt->execute([$nom,$prenom,$email,$telephone]);

    $userId = $pdo->lastInsertId();

    $stmt = $pdo->prepare('INSERT INTO userroles (user_id, role) VALUES (?,?)') ;
    $stmt->execute([$userId,$role]);

    echo "Utilisateur ajouté avec succès";
}else{
    echo "Tous les champs ne sont pas remplis";
}

?>




<div class="form-container">
    <form method="POST">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="telephone">Téléphone:</label>
        <input type="text" name="telephone" required><br>

        <label for="role">Rôle:</label>

        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="non-admin">Non-Admin</option>
        </select><br>

        <input type="submit" value="Ajouter">
    </form>
</div>



<?php
$content =  ob_get_clean();
$titre = "Ajouter un utilisateur";
require "template.php";
?>