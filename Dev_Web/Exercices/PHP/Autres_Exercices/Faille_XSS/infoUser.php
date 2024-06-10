<?php ob_start(); ?>
<?php
$nom = $email = $password = $confirmPassword = "";
echo $_POST['nom'];
echo $_POST['email'];
echo $_POST['MDP'];
echo $_POST['confirmMDP'];
echo $_POST['dateNaissance'];
echo $_POST['sexe'];



// if (isset($_POST['nom'])) {
//     $nom = valid_donnees($_POST['nom']);
//     // Vérifier Si l'e-mail est valide
//     echo "<p>Le nom : . $nom</p>";
// }

// if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['MDP']) && isset($_POST['confirmMDP']) && isset($_POST['email'])) {
//     $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL, array("options" => array("regexp"=>"/[a-zA-Z\s]*")));
//     // Vérifier Si l'e-mail est valide
//     if ($email) {
//         echo "<p>L'adresse e-mail saisie est : . $email</p>";
//     } else {
//         echo "<p>L'adresse e-mail non valide</p>";
//     }
// }


// function valid_donnees($donnees){
//     $donnees = trim($donnees);
//     echo $donnees;
//     $donnees = strip_tags($donnees);
//     echo $donnees;
//     $donnees = htmlspecialchars($donnees);
//     echo $donnees;
//     return $donnees;
// }
//TODO verifier : mdp et confirmation mdp, dateNaissance(age > 15ans)
?>

<?php
    $content = ob_get_clean();
    $titre = "Info_User";
    require "template.php";
?>