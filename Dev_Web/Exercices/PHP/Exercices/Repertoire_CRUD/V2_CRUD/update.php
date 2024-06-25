<?php
    ob_start();
    require_once "auth.php";
    
    $id = $nom = $prenom = $email = $telephone = $role = "";
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $id = trim($_POST['id']);
        $nom = ucfirst(trim($_POST['nom']));
        $prenom = ucfirst(trim($_POST['prenom']));
        $email = trim($_POST['email']);
        $telephone = trim($_POST['telephone']);
        $role = trim($_POST['role']);

        // Validation des champs
        if (empty($nom)) {
            $errors['nom'] = "Le nom est obligatoire.";
        }

        if (empty($prenom)) {
            $errors['nom'] = "Le prenom est obligatoire.";
        }

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Une adresse email valide est obligatoire.";
        }

        if (empty($telephone) || strlen($telephone) != 10) {
            $errors['telephone'] = "Le numéro de téléphone doit avoir 10 chiffres.";
        }
        
        // Si pas d'erreurs
        if (empty($errors)) {
            $pdo = getPDOConnexion();
            $stmt = $pdo->prepare('UPDATE users SET nom=?, prenom=?, email=?, telephone=?  WHERE id=?');
            $stmt->execute([$nom,$prenom,$email,$telephone,$id]);

            $stmt = $pdo->prepare('UPDATE userroles SET role=? WHERE user_id=?');
            $stmt->execute([$role,$id]);

            echo "Utilisateur modifié avec succès";
            header("Location: read.php");

            echo var_dump($id);
        } else {

        }

    } elseif($_SERVER["REQUEST_METHOD"] == "GET") {
        $id = $_GET['id'];
    }
?>

    <table>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Email</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Rôle</th>
            <th collapse="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $pdo = getPDOConnexion();
        $resultat = $pdo->prepare('SELECT * FROM users');
        $resultat->execute(); 
        foreach ($resultat as $user): 
            if($user['id'] == $id): ?>
            <tr>
                <form action="update.php" method="POST">
                    <td><input type="hidden" name="id" value="<?= $user['id'] ?>"><?= $user['id'] ?></td>
                    <td><input type="text" name="nom" value="<?= $user['nom']  ?>"></td>
                    <td><input type="text" name="prenom" value="<?= $user['prenom'] ?>"></td>
                    <td><input type="text" name="email" value="<?= $user['email'] ?>"></td>
                    <td><input type="text" name="telephone" value="<?= $user['telephone'] ?>"></td>
                    <td>
                        <select name="role">
                            <option value="admin">Admin</option>
                            <option value="non-admin">Non-admin</option>
                        </select>
                    </td>
                    <td><input type="submit" value="Valider"></td>
                    <td><a href="delete.php?id=<?= $user['id'] ?>">Annuler</a></td>
                </form>
            </tr>
            <?php else: ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nom']  ?></td>
                <td><?= $user['prenom'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['telephone'] ?></td>
                <td>
                    <select name="role">
                        <option value="admin">Admin</option>
                        <option value="non-admin">Non-admin</option>
                    </select>
                </td>
                <td><a href="update.php?id=<?= $user['id'] ?>">Modifier</a></td>
                <td><a href="delete.php?id=<?= $user['id'] ?>">Supprimer</a></td>
            </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
    $content = ob_get_clean();
    $titre = "Modifier un utilisateur";
    require "template.php";
?>