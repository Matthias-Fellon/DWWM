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