let Personnages = [
    {
        nom : 'Mage',
        pointDeVie : 30,
        attaque : 10,
        defense : 5,
        image : 'Images/Mage.png'
    },
    {
        nom : 'Guerrier',
        pointDeVie : 40,
        attaque : 10,
        defense : 3,
        image : 'Images/Mage.png'
    },
    {
        nom : 'Prêtre',
        pointDeVie : 50,
        attaque : 2,
        defense : 2,
        image : 'Images/Mage.png'
    },
    {
        nom : 'Archer',
        pointDeVie : 20,
        attaque : 5,
        defense : 1,
        image : 'Images/Mage.png'
    }
];

// Les différents écrans
const ecrAccueil = document.querySelector(".ecranAccueil");
const ecrSelection = document.querySelector(".ecranSelection");
const ecrCombat = document.querySelector(".ecranCombat");
const ecrFin = document.querySelector(".ecranFin");


//PARTIE ACCUEIL
const btnJouer = document.querySelector(".boutonJouer");
const btnRegles = document.querySelector(".boutonRegles");
const btnParametres = document.querySelector(".boutonParametres");

// Lien avec "btnRegles" 
const modal = document.querySelector(".modal");
const btnFermerRegles = document.querySelector(".boutonFermerRegles");

// Lien avec "btnJouer"

// Lien avec "btnParamètres"

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
//PERSONNAGES
// Sélectionne l'élément où tu veux ajouter les divs
const joueur1 = document.querySelector('.joueur1 .personnages');
const joueur2 = document.querySelector('.joueur2 .personnages');
let selectedDivJoueur1 = null; // Garder une trace de la div sélectionnée
let selectedDivJoueur2 = null; // Garder une trace de la div sélectionnée

// Parcours le tableau Personnages
Personnages.forEach(personnage => {
    // Crée un nouvel élément div
    const divJoueur1 = document.createElement('div');
    const divJoueur2 = document.createElement('div');
    divJoueur1.classList.add(`${personnage.nom}`);
    divJoueur2.classList.add(`${personnage.nom}`);

    // Remplit le contenu de la div avec les données du personnage
    divJoueur1.innerHTML = `
        <div class="description">
            <p><strong>Nom:</strong> ${personnage.nom}</p>
            <div class="attributs">
                <p><strong>Points de Vie:</strong> ${personnage.pointDeVie}</p>
                <p><strong>Attaque:</strong> ${personnage.attaque}</p>
                <p><strong>Défense:</strong> ${personnage.defense}</p>
            </div>
        </div>
        <img class="image${personnage.nom}" src="${personnage.image}" alt="Image pixel ${personnage.nom}">
    `;

    divJoueur2.innerHTML = `
    <div class="description">
        <p><strong>Nom:</strong> ${personnage.nom}</p>
        <div class="attributs">
            <p><strong>Points de Vie:</strong> ${personnage.pointDeVie}</p>
            <p><strong>Attaque:</strong> ${personnage.attaque}</p>
            <p><strong>Défense:</strong> ${personnage.defense}</p>
        </div>
    </div>
    <img class="image${personnage.nom}" src="${personnage.image}" alt="Image pixel ${personnage.nom}">
`;

    divJoueur1.addEventListener('click', () => {
        // Désélectionne la div précédemment sélectionnée
        if (selectedDivJoueur1) {
            selectedDivJoueur1.classList.remove('heroSelected');
        }
        // Sélectionne la div actuellement cliquée
        selectedDivJoueur1 = divJoueur1;
        selectedDivJoueur1.classList.add('heroSelected');
    });

    divJoueur2.addEventListener('click', () => {
        // Désélectionne la div précédemment sélectionnée
        if (selectedDivJoueur2) {
            selectedDivJoueur2.classList.remove('heroSelected');
        }
        // Sélectionne la div actuellement cliquée
        selectedDivJoueur2 = divJoueur2;
        selectedDivJoueur2.classList.add('heroSelected');
    });

    // Ajoute la div au conteneur
    joueur1.appendChild(divJoueur1);
    joueur2.appendChild(divJoueur2);
});

//BOUTON "PRÊT"
const j1BtnPret = document.querySelector('.j1BoutonPret') ;
const j2BtnPret = document.querySelector('.j2BoutonPret') ;

j1BtnPret.addEventListener('click', () => {
    j1BtnPret.classList = 'btnSelected';
    if(j2BtnPret.classList == 'btnSelected'){
        //sauvegarder la classe choisi par le joueur1
        switch(document.querySelector('.joueur1 .personnages').children.classList){
            case '.Mage .heroSelected':
                //prendre l'objet n°1 du tableau "Personnages"
                break;

            case '.Guerrier .heroSelected':
                //prendre l'objet n°2 du tableau "Personnages"
                break;

            case '.Prêtre .heroSelected':
                //prendre l'objet n°3 du tableau "Personnages"
                break;

            case '.Archer .heroSelected':
                //prendre l'objet n°4 du tableau "Personnages"
                break;
        };
        ecrSelection.style.display = "none";
        ecrCombat.style.display = "flex";
    }
});

j2BtnPret.addEventListener('click', () => {
    j2BtnPret.classList = 'btnSelected';
    if(j1BtnPret.classList == 'btnSelected'){
        //sauvegarder la classe choisi par le joueur2
        switch(document.querySelector('.joueur2 .personnages').children.classList){
            case '.Mage .heroSelected':
                //prendre l'objet n°1 du tableau "Personnages"
                break;

            case '.Guerrier .heroSelected':
                //prendre l'objet n°2 du tableau "Personnages"
                break;

            case '.Prêtre .heroSelected':
                //prendre l'objet n°3 du tableau "Personnages"
                break;

            case '.Archer .heroSelected':
                //prendre l'objet n°4 du tableau "Personnages"
                break;
        };
        ecrSelection.style.display = "none";
        ecrCombat.style.display = "flex";
    }
});