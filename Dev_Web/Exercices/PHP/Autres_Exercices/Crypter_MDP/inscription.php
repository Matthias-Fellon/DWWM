<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulaire d'inscription</h2>
        <form action="inscription.php" method="post">
            <!-- <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required> -->

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="S'inscrire">
        </form>
    </div>
</body>
</html>

<?php 
    require_once "dbConnect.php";

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        var_dump($email);
        var_dump($password);

        $req = $db->prepare('INSERT INTO users (email, password) VALUES (:email, :password)');
        $req->bindValue('email', $email);
        $req->bindValue('password', $password);
        $resultat = $req->execute();

        if($resultat){
            echo "Inscription réussie";
        }
    }
?>