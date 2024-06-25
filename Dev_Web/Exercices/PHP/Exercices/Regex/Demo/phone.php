<?php
if (isset($_POST['phone'])) {
    $tel_num = $_POST['phone'];
    $tel_model = "/^(?:(?:\+|00)33|0)[1-9](?:[.\-\s]?\d{2}){4}$/";

    if (preg_match($tel_model,  $tel_num)) {
        echo "Numéro de téléphone valide";
    } else {
        echo "Numéro de téléphone invalide";
    }
} else {
    echo "Veuillez soumettre le formulaire.";
}
?>
