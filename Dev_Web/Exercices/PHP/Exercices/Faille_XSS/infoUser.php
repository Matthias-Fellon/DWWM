<?php
session_start();
ob_start(); 

//Recueillir les infos user
echo "<p>Nom : " . $_SESSION['username'] . "</p><br>";
echo "<p>Mail : " . $_SESSION['email'] . "</p><br>";
echo "<p>MDP : " . $_SESSION['MDP'] . "</p><br>";
echo "<p>Date de naissance : " . $_SESSION['dateNaissance'] . "</p><br>";
echo "<p>Sexe :" . $_SESSION['sexe'] . "</p><br>";
?>

<?php
    $content = ob_get_clean();
    $titre = "Info_User";
    require "template.php";
?>