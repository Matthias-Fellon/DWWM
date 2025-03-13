<?php ob_start(); ?>

<div class="home">
    <div class="home-gride">
        <div class="items one">
            <img src="/Public/Images/Thao_2.jpg" alt="">
        </div>
        <div class="items two">
            <div class="img">
                <img src="/Public/Images/Ice_2.JPG" alt="">
            </div>
            <div class="content">
                <h1>Bienvenue sur le site <br> des Fell de Chyme</h1>
                <p>Vous trouverez ici toutes les informations nécessaires pour adopter un chaton.</p>
            </div>
        </div>
        <div class="items three">
            <img src="/Public/Images/Nevenn.JPG" alt="">
        </div>
        <div class="items four">
            <img src="/Public/Images/Thao-3.jpg" alt="">
        </div>
    </div>
</div>

<div class="aboutMe">
    <div class="container">
        <div class="left-container">
            <h3>À propos de moi</h3>
            <p>
                <br>From carbon footprint reduction to renewable energy adoption and biodiversity preservation, our key milestones reflect our commitment to creating a sustainable future for all.
            </p>
        </div>
        <div class="right-container">
            <div class="content">
                <h2>Titre</h2>
                <p>Je suis un texte</p>
                <div class="separator">
                    <hr>
                </div>
            </div>
            <div class="content">
                <h2>Titre</h2>
                <p>Je suis un texte</p>
                <div class="separator">
                    <hr>
                </div>
            </div>
            <div class="content">
                <h2>Titre</h2>
                <p>Je suis un texte</p>
                <div class="separator">
                    <hr>
                </div>
            </div>
            <div class="content">
                <h2>Titre</h2>
                <p>Je suis un texte</p>
                <div class="separator">
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="aboutCompagny">
    <div class="left-container">
        <h2>A Call for Environmental Protection</h2>
        <p>
            <br><br>
            Environmental protection is the practice of safeguarding the natural world from harmful human activities and preserving ecosystems for future generations. It involves efforts to reduce pollution, conserve biodiversity, and sustainably manage natural resources such as air, water, and soil.
            <br><br>
        </p>
        <a href="#" class="btn btn-primary">Plus de détails</a>
    </div>
    <div class="right-container">
        <img src="/Public/Images/Nevenn.JPG" style="object-fit: cover;" alt="" loading="lazy">
    </div>
</div>

<div class="gallery">
    <div class="gallery-item item1">
        <img src="/Public/Images/Ice_2.JPG" alt="">
    </div>
    <div class="gallery-item item2">
        <img src="/Public/Images/Ice_2.JPG" alt="">
    </div>
    <div class="gallery-item item3">
        <img src="/Public/Images/Ice_2.JPG" alt="">
    </div>
    <div class="gallery-item item4">
        <img src="/Public/Images/Ice_2.JPG" alt="">
    </div>
    <div class="gallery-item item5">
        <img src="/Public/Images/Ice_2.JPG" alt="">
    </div>
    <div class="gallery-item item6">
        <img src="/Public/Images/Ice_2.JPG" alt="">
    </div>
</div>


<?php
$content = ob_get_clean();
$titre = "Accueil";
require __DIR__ . "/../template.php";
?>