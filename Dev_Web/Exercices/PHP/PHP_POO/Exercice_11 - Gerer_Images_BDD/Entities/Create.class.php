<?php
ob_start();
require_once __DIR__ . "/../DB_Connect/MyDbConnection.php";
require_once __DIR__ . "/Auth.class.php";
require_once __DIR__ . "/User.class.php";

Auth::verifyAdmin();

//ATTRIBUTION DES VARIABLES AUX VALEURS ENVOYÉES PAR LE FORMULAIRE
function formaterDonnees(array $donnees) {
    $donnees['nom'] = ucfirst(trim($donnees['nom']));
    $donnees['prenom'] = ucfirst(trim($donnees['prenom']));
    $donnees['email'] = trim($donnees['email']);
    $donnees['telephone'] = trim($donnees['telephone']);
    $donnees['password'] = trim($donnees['password']);
    $donnees['confirmPassword'] = trim($donnees['confirmPassword']);
    $donnees['role'] = trim($donnees['role']);

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

    if (empty($data['password'])) {
        $errors['password'] = "Le mot de passe est obligatoire.";
    }

    if (empty($data['confirmPassword']) || $data['confirmPassword'] != $data['password']) {
        $errors['confirmPassword'] = "Veuillez confirmer le mot de passe.";
    }

    if (empty($data['role'])) {
        $errors['role'] = "Veuillez selectionner un rôle.";
    }

    return $errors;
}

// GESTION DE L'IMAGE
function handleImageUpload($currentImage, $nomUser , $prenomUser) {
    $image = $_FILES['image']; // $_FILES retourne un tableau associatif dans lequel nous avons les clés "name", "tmp_name" ou encore "error".
    
    if (!isset($image) || $image['error'] != UPLOAD_ERR_OK) { // Si pas d'image ou Si problème d'envoie...
        return $currentImage;
    }
    
    $extensionImage = pathinfo($image['name'], PATHINFO_EXTENSION); // Obtenir l'extension de l'image.
    $extensionsAutorisees = ["jpg", "jpeg", "png"]; // Tableau contenant les noms d'extension autorisés.

    if (!in_array($extensionImage, $extensionsAutorisees)) { // Si l'extension de l'image n'est pas valide...
        return ["error" => "Format invalide ! Formats autorisés : jpg / jpeg / png"];
    }

    $image_dir = '../Public/Images/'; // Chemin où l'image sera stocké.
    $imageNewName = $nomUser . '-' . $prenomUser . time() . '.' . $extensionImage; // Renome le fichier
    $uploadNewFile = $image_dir . $imageNewName; // Chemin complet de la nouvelle image.

    if (!move_uploaded_file($image['tmp_name'], $uploadNewFile)) { // Si l'envoie l'image dans le dossier "Images" du serveur échoue...
        return ["error" => "Erreur lors du téléchargement de l'image."];
    }

    return $imageNewName;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postData = formaterDonnees($_POST);
    $errors = validateInput($postData);
    
    if($_FILES['image']['error'] != 4) {
        $imageResult = handleImageUpload($_FILES['image'], $postData['nom'], $postData['prenom']);
        if (is_array($imageResult)) {
            $errors['image'] = $imageResult['error'];
        } else {
            $nomImage = $imageResult;
        }
    } else {
        $nomImage = "";
    }

    if (empty($errors)) {
        $message = User::createUser($postData['nom'], $postData['prenom'], $postData['email'], $postData['telephone'], $postData['password'], $postData['role'], $nomImage);
        echo $message;
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>

<!-- FROMULAIRE CRUD CRÉER -->
<div class="form-container">
    <form method="POST" enctype="multipart/form-data">
        <label for="nom">Nom de l'utilisateur : </label><br>
        <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($nom ?? '') ?>"><br>
        <span><?= $errors['nom'] ?? '' ?></span><br>

        <label for="prenom">Prénom nom de l'utilisateur : </label><br>
        <input type="text" name="prenom" id="prenom" value="<?= htmlspecialchars($prenom ?? '') ?>"><br>
        <span><?= $errors['prenom'] ?? '' ?></span><br>

        <label for="email">Email de l'utilisateur : </label><br>
        <input type="email" name="email" id="email" value="<?= htmlspecialchars($email ?? '') ?>"><br>
        <span><?= $errors['email'] ?? '' ?></span><br>

        <label for="telephone">Téléphone de l'utilisateur : </label><br>
        <input type="text" name="telephone" id="telephone" value="<?= htmlspecialchars($telephone ?? '') ?>"><br>
        <span><?= $errors['telephone'] ?? '' ?></span><br>

        <label for="password">Mot de passe de l'utilisateur : </label><br>
        <input type="password" name="password" id="password" value="<?= htmlspecialchars($password ?? '') ?>"><br>
        <span><?= $errors['password'] ?? '' ?></span><br>

        <label for="confirmPassword">Comfirmer mot de passe : </label><br>
        <input type="password" name="confirmPassword" id="confirmPassword" value="<?= htmlspecialchars($confirmPassword ?? '') ?>"><br>
        <span><?= $errors['confirmPassword'] ?? '' ?></span><br>

        <label for="role">Rôle :</label>
        <select name="role" id="role" required>
            <option value="admin">Admin</option>
            <option value="non-admin">Non-Admin</option>
        </select><br>
        <span><?= $errors['role'] ?? '' ?></span><br>

        <label for="image">Image de profil :</label>
        <input type="file" name="image" id="image"><br>
        <span><?= $errors['image'] ?? '' ?></span><br>

        <input type="submit" value="Ajouter">
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Ajouter un utilisateur";
require __DIR__ . "/../Public/template.php";
?>