<?php
    ob_start();
    session_start(); // Démarre la session
    if(isset($_SESSION['username'])){
        echo "<p>Inscription réussie !</p>";
        echo "<p>Vous êtes : " . $_SESSION['username'] . "</p>";

        echo '<form action="logout.php" method="POST">
        <input type="submit" value="Se déconnecter">
        </form>';
    }else{
        echo "<p>Veuillez vous <a href='login.php'>connecter</a>.</p>";
        // header("Location: login.php");
    }
?>

<?php
    $content = ob_get_clean();
    $titre = "Accueil";
    require "template.php";
?>