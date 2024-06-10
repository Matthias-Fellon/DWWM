<?php
$postData = $_POST;

if (
    !isset($postData['email'])
    || !filter_var($postData['email'], FILTER_VALIDATE_EMAIL)
    || empty($postData['message'])
    || trim($postData['message']) === ''
) {
    echo('Il faut un email et un message valides pour soumettre le formulaire.');
    return;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Contact reçu</title>
</head>
<body>
    <div class="container">
        <?php require_once(__DIR__ . '/header.php'); ?>
        <h1>Message bien reçu !</h1>
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Rappel de vos informations</h5>
            <p class="card-text"><b>Email</b> : <?php echo($postData['email']); ?></p>
            <p class="card-text"><b>Message</b> : <?php echo(strip_tags($postData['message'])); ?></p>
        </div>
    </div>
</body>
</html>