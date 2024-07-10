<?php
ob_start();
// require_once "../entities/Auth.class.php";
// require_once "../entities/User.class.php";
require_once __DIR__ . "/Auth.class.php";
require_once __DIR__ . "/User.class.php";
Auth::verifyAdmin();

//ATTRIBUTION DES VARIABLES AUX VALEURS ENVOYÉES PAR LE FORMULAIRE
function formaterDonnees(array $donnees) {
    $donnees['nom'] = ucfirst(trim($donnees['nom']));
    $donnees['prenom'] = ucfirst(trim($donnees['prenom']));
    $donnees['email'] = trim($donnees['email']);
    $donnees['telephone'] = trim($donnees['telephone']);

    return $donnees;
}

// VALIDER LES DONNÉES ÉMISES PAR LE FORMULAIRE
function validateInput(array $data) {
    $errors = []; // Variable pour stocker les messages d'erreur

    // VALIDATION DES CHAMPS
    if (empty($data['nom'])) {
        $errors['nom'] = "Le nom est obligatoire.";
    }

    if (empty($data['prenom'])) {
        $errors['prenom'] = "Le prénom est obligatoire.";
    }

    if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Une adresse email valide est obligatoire.";
    }

    if (empty($data['telephone']) || strlen($data['telephone']) != 10) {
        $errors['telephone'] = "Le numéro de téléphone doit avoir 10 chiffres.";
    }

    return $errors;
}

// GESTION DE L'IMAGE
function handleImageUpload($imageOldName, $nomUser , $prenomUser) {
    $image = $_FILES['image']; // $_FILES retourne un tableau associatif dans lequel nous avons les clés "name", "tmp_name" ou encore "error".

    if (!isset($image) || $image['error'] != UPLOAD_ERR_OK) { // Si pas d'image ou Si problème d'envoie...
        return $imageOldName;
    }
    
    $extensionImage = pathinfo($image['name'], PATHINFO_EXTENSION); // Obtenir l'extension de l'image.
    $extensionsAutorisees = ["jpg", "jpeg", "png"]; // Tableau contenant les noms d'extension autorisés.

    if (!in_array($extensionImage, $extensionsAutorisees)) { // Si l'extension de l'image n'est pas valide...
        return ["error" => "Format invalide ! Formats autorisés : jpg / jpeg / png"];
    }

    $image_dir = '../Public/Images/'; // Chemin où l'image sera stocké.
    $uploadOldFile = $image_dir . $imageOldName; // Chemin complet de l'ancienne image.
    $imageNewName = $nomUser . '-' . $prenomUser . time() . '.' . $extensionImage; // Renome le fichier
    $uploadNewFile = $image_dir . $imageNewName; // Chemin complet de la nouvelle image.
    
    if (file_exists($uploadOldFile)) {
        unlink($uploadOldFile);       
    }

    if (!move_uploaded_file($image['tmp_name'], $uploadNewFile)) { // Si l'envoie l'image dans le dossier "Images" du serveur échoue...
        return ["error" => "Erreur lors du téléchargement de l'image."];
    }

    return $imageNewName;
}

if (isset($_GET['id'])) {
    $user = User::getUserById($_GET['id']);

    if (!$user) {
        echo "Utilisateur non trouvé.";
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $user['id'];
        $postData = formaterDonnees($_POST);
        $errors = validateInput($postData);

        if($_FILES['image']['error'] != 4) {
            $imageResult = handleImageUpload($user['nomImage'], $postData['nom'], $postData['prenom']);
            if (is_array($imageResult)) {
                $errors['image'] = $imageResult['error'];
            } else {
                $nomImage = $imageResult;
            }
        } else {
            $nomImage = "";
        }
        
        if (empty($errors)) {
            $message = User::updateUser($id, $postData['nom'], $postData['prenom'], $postData['email'], $postData['telephone'], $nomImage);
            echo $message;
        } else {
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
        }
    }
} else {
    echo "Aucun ID d'utilisateur fourni.";
    exit();
}
?>

<!-- FORMULAIRE CRUD MODIFIER --> 
<div class="form-container">
    <?php if ($user) : ?>
        <form method="POST" enctype="multipart/form-data">
            <label>Image :</label>
            <img src="../Public/Images/<?php echo htmlspecialchars($user['nomImage']); ?>" width="50" height="50" style="display:flex; margin:auto;">
            
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($user['nom']); ?>" required><br>
            <span><?= $errors['nom'] ?? '' ?></span><br>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" value="<?php echo htmlspecialchars($user['prenom']); ?>" required><br>
            <span><?= $errors['prenom'] ?? '' ?></span><br>

            <label for="email">Email :</label>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br>
            <span><?= $errors['email'] ?? '' ?></span><br>

            <label for="telephone">Téléphone :</label>
            <input type="text" name="telephone" id="telephone" value="<?php echo htmlspecialchars($user['telephone']); ?>" required><br>
            <span><?= $errors['telephone'] ?? '' ?></span><br>

            <label for="image">Image de profil :</label>
            <input type="file" name="image" id="image"><br>
            <span><?= $errors['image'] ?? '' ?></span><br>
            
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
