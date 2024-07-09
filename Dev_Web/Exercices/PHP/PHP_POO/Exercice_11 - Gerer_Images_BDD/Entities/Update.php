<?php
ob_start();
require_once "../entities/Auth.class.php";
require_once "../entities/User.class.php";

$auth = new Auth();
$auth->verifierAdmin();

$user = new User();

if (isset($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['role'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $role = $_POST['role'];

    // Gestion de l'image
    $nomImage = $_POST['currentImage']; // L'image actuelle par défaut
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $nomImage = basename($_FILES['image']['name']);
        $upload_dir = '../public/images/';
        $upload_file = $upload_dir . $nomImage;
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $upload_file)) {
            echo "Erreur lors du téléchargement de l'image.";
            exit();
        }
    }

    $message = $user->updateUser($id, $nom, $prenom, $email, $telephone, $role, $nomImage);
    echo $message;
}

if (isset($_GET['id'])) {
    $utilisateur = $user->getUserById($_GET['id']);

    if (!$utilisateur) {
        echo "Utilisateur non trouvé.";
        exit();
    }
} else {
    echo "Aucun ID d'utilisateur fourni.";
    exit();
}
?>

<div class="form-container">
    <?php if ($utilisateur) : ?>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($utilisateur['id']); ?>">
            <input type="hidden" name="currentImage" value="<?php echo htmlspecialchars($utilisateur['nomImage']); ?>">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" value="<?php echo htmlspecialchars($utilisateur['nom']); ?>" required><br>
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" value="<?php echo htmlspecialchars($utilisateur['prenom']); ?>" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($utilisateur['email']); ?>" required><br>
            <label for="telephone">Téléphone:</label>
            <input type="text" name="telephone" value="<?php echo htmlspecialchars($utilisateur['telephone']); ?>" required><br>
            <label for="role">Rôle:</label>
            <select name="role" required>
                <option value="admin" <?php if ($utilisateur['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                <option value="non-admin" <?php if ($utilisateur['role'] == 'non-admin') echo 'selected'; ?>>Non-Admin</option>
            </select><br>
            <label for="image">Image:</label>
            <input type="file" name="image"><br>
            <input type="submit" value="Mettre à jour">
        </form>
    <?php else : ?>
        <p>Utilisateur non trouvé.</p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Modifier un utilisateur";
require "template.php";
?>
