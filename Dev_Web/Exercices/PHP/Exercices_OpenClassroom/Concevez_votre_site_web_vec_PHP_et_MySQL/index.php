<?php
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/fonctions.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Page d'accueil</title>
</head>

<body>
    <!-- L'en-tête -->
    <?php require_once(__DIR__ . '/header.php'); ?>

    <!-- Le corps -->
    <main id="corps">
        <h1>Site de recettes</h1>
        <?php foreach (getRecipes($recipes) as $recipe) : ?>
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
            </article>
        <?php endforeach ?>
    </main>
    
    <!-- Le pied de page -->
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>