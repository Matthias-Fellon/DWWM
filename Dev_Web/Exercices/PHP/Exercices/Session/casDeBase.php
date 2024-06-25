<?php
session_start(); //Démarre une session

//Stocker des infos dans la session
$_SESSION['username'] = "toto";
$_SESSION['mail'] = "toto@gmail.com";

//Accéder aux infos de la session
echo "Username : " . $_SESSION['username'] . "<br>";
echo "Mail : " . $_SESSION['mail'] . "<br>";

//Je vérifie si la session est active
if(isset($_SESSION['username'])){
    echo "L'utilisateur est connecté : " . $_SESSION['username'];
}else{
    echo "L'utilisateur n'est pas connecté !";
}

//Supprimer une variable de la session
unset($_SESSION['username']);
echo "Username : " . $_SESSION['username'] . "<br>";

//Détruire la session
$_SESSION = array();

//Détruire le cookie de session
if(ini_get("session.use_cookies")){
    $params = session_get_cookie_params();
    setcookie(session_name(), '',time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}
session_destroy();

?>