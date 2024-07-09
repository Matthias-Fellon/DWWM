<?php
ob_start();
require_once __DIR__ . "/Auth.class.php";
require_once __DIR__ . "/User.class.php";
Auth::verifyAdmin();

if(isset($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST['role'], $_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $role = $_POST['role'];
    
    // Gestion de l'image
    $image = $_FILES['image'];
    echo (var_dump($image));

    $nomImage = basename($image['name']);
    $upload_dir = '../Public/Images/';
    $upload_file = $upload_dir . $nomImage;
    if (!move_uploaded_file($image['tmp_name'], $upload_file)) {
        echo "Erreur lors du téléchargement de l'image.";
        exit();
    }
    $message = User::updateUser($id, $nom, $prenom, $email, $telephone, $role, $nomImage);
    echo $message;
    
    
    // // Obtenir l'extention de l'image
    // $extension = substr($image,strlen($image)-4,strlen($image));
   
    // // Validation for allowed extensions.
    // $allowed_extensions = array(".jpg","jpeg",".png");
    // if (!in_array($extension, $allowed_extensions)) {
    //     echo "<script>alert('Format invalide !  Formats autorisées : jpg / jpeg / png');</script>";
    // } else {
    // }
} else {
    echo ("YOO");
}

if (isset($_GET['id'])) {
    $user = User::getUserById($_GET['id']);

    if (!$user) {
        echo "Utilisateur non trouvé.";
        exit();
    }
} else {
    echo "Aucun ID d'utilisateur fourni.";
    exit();
}
?>

<div class="form-container">
    <?php if ($user) : ?>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?php echo htmlspecialchars($user['id']); ?>">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($user['nom']); ?>" required><br>
            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" id="prenom" value="<?php echo htmlspecialchars($user['prenom']); ?>" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br>
            <label for="telephone">Téléphone:</label>
            <input type="text" name="telephone" id="telephone" value="<?php echo htmlspecialchars($user['telephone']); ?>" required><br>
            <label for="role">Rôle:</label>
            <select name="role" id="role" required>
                <option value="admin" <?php if ($user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                <option value="non-admin" <?php if ($user['role'] == 'non-admin') echo 'selected'; ?>>Non-Admin</option>
            </select><br>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image"><br> <!-- Verifier ce que contient cette imput comme données -->
            
            <input type="submit" value="Mettre à jour">
        </form>
    <?php else : ?>
        <p>Utilisateur non trouvé.</p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Modifier un utilisateur";
require __DIR__ . "/../Public/template.php";
?>
