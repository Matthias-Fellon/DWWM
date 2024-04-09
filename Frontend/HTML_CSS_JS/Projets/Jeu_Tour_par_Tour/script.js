let Personnages = [
    {
        nom : 'mage',
        pointDeVie : 30,
        attaque : 3,
        defense : 0,
        // capacite : function(){},
    },
    {
        nom : 'guerrier',
        pointDeVie : 30,
        attaque : 3,
        defense : 0,
        // capacite : function(){},
    },
    {
        nom : 'Prêtre',
        pointDeVie : 30,
        attaque : 3,
        defense : 0,
        // capacite : function(){},
    },
    {
        nom : 'Archer',
        pointDeVie : 30,
        attaque : 3,
        defense : 0,
        // capacite : function(){},
    }
];

//CRÉATION DES CONSTANTES
// Les différents écrans
const ecrAccueil = document.querySelector(".ecranAccueil");
const ecrSelection = document.querySelector(".ecranSelection");
const ecrCombat = document.querySelector(".ecranCombat");
const ecrFin = document.querySelector(".ecranFin");

// Section "ecranAccueil"
const btnJouer = document.querySelector(".boutonJouer");
const btnRegles = document.querySelector(".boutonRegles");
const btnParametres = document.querySelector(".boutonParametres");

// Lien avec "btnRegles" 
const modal = document.querySelector(".modal");
const btnFermerRegles = document.querySelector(".boutonFermerRegles");

// Lien avec "btnJouer"

// Lien avec "btnParamètres"


// Section "ecranSelection"
// Personnages
const j1Personnage1 = document.querySelector(".personnages").querySelectorAll(".personnage_1")[0];
const j1Personnage2 = document.querySelector(".personnage_2")[0];
const j1Personnage3 = document.querySelector(".personnage_3")[0];
const j1Personnage4 = document.querySelector(".personnage_4")[0];
console.log("perso 1"+j1Personnage1);

const j2Personnage1 = document.querySelector(".personnage_1").querySelectorAll(".personnage_1")[1];
const j2Personnage2 = document.querySelector(".personnage_2")[1];
const j2Personnage3 = document.querySelector(".personnage_3")[1];
const j2Personnage4 = document.querySelector(".personnage_4")[1];
console.log("perso 2" +j2Personnage1);



//PARTIE ACCUEIL
//Bouton "Jouer"
btnJouer.addEventListener('click', () => {
    ecrAccueil.style.display="none";
    ecrSelection.style.display="flex";
});


//Bouton "Règles"
btnRegles.addEventListener('click', () => { //Lorsque l'utilisateur clique sur le bouton "Règles", affiche le modal 
    modal.style.display = "block";
});

btnFermerRegles.addEventListener('click', () => { //Lorsque l'utilisateur clique sur la croix, ferme le modal
    modal.style.display = "none";
});

window.addEventListener('click', (event) => { //Lorsque l'utilisateur clique n'importe où en dehors du modal, ferme le modal
    if (event.target == modal) {
        modal.style.display = "none";
    }
});

//Bouton "Paramètres"


//PARTIE SELECTION
//Joueur 1
/*/j1Personnage1.addEventListener ('click', () => {
    j1Personnage1.style.border = "solid 2px white";
    j1Personnage2.style.border = "none";
    j1Personnage3.style.border = "none";
    j1Personnage4.style.border = "none";
});

j1Personnage2.addEventListener ('click', () => {
    j1Personnage1.style.border = "none";
    j1Personnage2.style.border = "solid 2px white";
    j1Personnage3.style.border = "none";
    j1Personnage4.style.border = "none";
});

j1Personnage3.addEventListener ('click', () => {
    j1Personnage1.style.border = "none";
    j1Personnage2.style.border = "none";
    j1Personnage3.style.border = "solid 2px white";
    j1Personnage4.style.border = "none";
});

j1Personnage4.addEventListener ('click', () => {
    j1Personnage1.style.border = "none";
    j1Personnage2.style.border = "none";
    j1Personnage3.style.border = "none";
    j1Personnage4.style.border = "solid 2px white";
});

//Joueur 2
j2Personnage1.addEventListener ('click', () => {
    j2Personnage1.style.border = "solid 2px white";
    j2Personnage2.style.border = "none";
    j2Personnage3.style.border = "none";
    j2Personnage4.style.border = "none";
});

j2Personnage2.addEventListener ('click', () => {
    j2Personnage1.style.border = "none";
    j2Personnage2.style.border = "solid 2px white";
    j2Personnage3.style.border = "none";
    j2Personnage4.style.border = "none";
});

j2Personnage3.addEventListener ('click', () => {
    j2Personnage1.style.border = "none";
    j2Personnage2.style.border = "none";
    j2Personnage3.style.border = "solid 2px white";
    j2Personnage4.style.border = "none";
});

j2Personnage4.addEventListener ('click', () => {
    j2Personnage1.style.border = "none";
    j2Personnage2.style.border = "none";
    j2Personnage3.style.border = "none";
    j2Personnage4.style.border = "solid 2px white";
});*/