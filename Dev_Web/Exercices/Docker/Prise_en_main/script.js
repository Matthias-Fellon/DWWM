let Personnages = [
    {
        nom         : 'Pikachu',
        pointDeVie  : 280,
        attaques    :
        {
            attaque_1 : {nom : 'Électacle',     degats : 120},
            attaque_2 : {nom : 'Tonerre',       degats : 90},
            attaque_3 : {nom : 'Queue de Fer',  degats : 75},
            attaque_4 : {nom : 'Fatal-Foudre',  degats  : 110}
        },
        niveau      : 88,
        image       : 'Images/Pikachu.png'
    },
    {
        nom         : 'Dracaufeu',
        pointDeVie  : 320,
        attaques    :
        {
            attaque_1 : {nom : 'Lance-Flammes', degats  : 90},
            attaque_2 : {nom : 'Aéropique',     degats  : 60},
            attaque_3 : {nom : 'Draco-Griffe',  degats  : 85},
            attaque_4 : {nom : 'Aire de Feu',   degats  : 80}
        },
        niveau      : 86,
        image       : 'Images/Dracaufeu.png'
    },
    {
        nom         : 'Tortank',
        pointDeVie  : 300,
        attaques    :
        {
            attaque_1 : {nom : 'Hydrocanon',    degats : 110},
            attaque_2 : {nom : 'Tour Rapide',   degats : 50},
            attaque_3 : {nom : 'Luminocanon',   degats : 85},
            attaque_4 : {nom : 'Aire d\'Eau',   degats : 80}
        },
        niveau      : 2,
        image       : 'Images/Tortank.png'
    },
    {
        nom         : 'Florizarre',
        pointDeVie  : 340,
        attaques    :
        {
            attaque_1 : {nom : 'Giga-Sangsue',  degats : 75},
            attaque_2 : {nom : 'Tempête Verte', degats : 130},
            attaque_3 : {nom : 'Lance-Soleil',  degats : 120},
            attaque_4 : {nom : 'Aire d\'Herbe', degats : 80},
        },
        niveau      : 82,
        image       : 'Images/Florizarre.png'
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
const joueur1 = document.querySelector('.pokemonJ1');
const joueur2 = document.querySelector('.pokemonJ2');
let selectedDivJoueur1 = null; // Garder une trace de la div sélectionnée
let selectedDivJoueur2 = null; // Garder une trace de la div sélectionnée
let j1Pokemon;
let j2Pokemon;

// Parcours le tableau Personnages
Personnages.forEach(personnage => {
    // Crée un nouvel élément div
    const divJoueur1 = document.createElement('div');
    const divJoueur2 = document.createElement('div');
    divJoueur1.classList.add(`${personnage.nom}`);
    divJoueur2.classList.add(`${personnage.nom}`);

    // Remplit le contenu de la div avec les données du pokemon
    divJoueur1.innerHTML = `
        <div class="description">
            <p><strong>Nom:</strong> ${personnage.nom}</p>
            <div class="attributs">
                <div class="pointsDeVie">
                    <label id="txtPDVJ1" for="pDVJ1"><strong>HP : </strong>${personnage.pointDeVie}</label>
                    <progress id="pDVJ1" max="${personnage.pointDeVie}" value="${personnage.pointDeVie}"></progress>
                </div>
                <div class="attaques">
                    <p><strong>${personnage.attaques.attaque_1.nom} : </strong> ${personnage.attaques.attaque_1.degats}</p>
                    <p><strong>${personnage.attaques.attaque_2.nom} : </strong> ${personnage.attaques.attaque_2.degats}</p>
                    <p><strong>${personnage.attaques.attaque_3.nom} : </strong> ${personnage.attaques.attaque_3.degats}</p>
                    <p><strong>${personnage.attaques.attaque_4.nom} : </strong> ${personnage.attaques.attaque_4.degats}</p>
                </div>
            </div>
        </div>
        <img class="images image${personnage.nom}" src="${personnage.image}" alt="Image ${personnage.nom}">
    `;

    divJoueur2.innerHTML = `
        <div class="description">
            <p><strong>Nom:</strong> ${personnage.nom}</p>
            <div class="attributs">
                <div class="pointsDeVie">
                    <label id="txtPDVJ2" for="pDVJ2"><strong>HP : </strong>${personnage.pointDeVie}</label>
                    <progress id="pDVJ2" max="${personnage.pointDeVie}" value="${personnage.pointDeVie}"></progress>
                </div>
                <div class="attaques">
                    <p><strong>${personnage.attaques.attaque_1.nom} : </strong> ${personnage.attaques.attaque_1.degats}</p>
                    <p><strong>${personnage.attaques.attaque_2.nom} : </strong> ${personnage.attaques.attaque_2.degats}</p>
                    <p><strong>${personnage.attaques.attaque_3.nom} : </strong> ${personnage.attaques.attaque_3.degats}</p>
                    <p><strong>${personnage.attaques.attaque_4.nom} : </strong> ${personnage.attaques.attaque_4.degats}</p>
                </div>
            </div>
        </div>
        <img class="images image${personnage.nom}" src="${personnage.image}" alt="Image ${personnage.nom}">
    `;

    divJoueur1.addEventListener('click', () => {
        // Désélectionne la div précédemment sélectionnée
        if (selectedDivJoueur1) {
            selectedDivJoueur1.classList.remove('pokemonSelected');
        }
        // Sélectionne la div actuellement cliquée
        selectedDivJoueur1 = divJoueur1;
        selectedDivJoueur1.classList.add('pokemonSelected');
        
        //Atribution des valeurs pour le joueur 1
        switch(true){
            case divJoueur1.classList.contains('Pikachu'):
                j1Pokemon = Object.assign({}, Personnages[0]);
                break;
            
            case divJoueur1.classList.contains('Dracaufeu'):
                j1Pokemon = Object.assign({}, Personnages[1]);
                break;

            case divJoueur1.classList.contains('Tortank'):
                j1Pokemon = Object.assign({}, Personnages[2]);
                break;
                
            case divJoueur1.classList.contains('Florizarre'):
                j1Pokemon = Object.assign({}, Personnages[3]);
                break;

            default:
                console.log("nonJ1");
                break;          
        }
        console.log("J1 point de vie : " + j1Pokemon.pointDeVie);
        document.getElementById('pointDeVieJ1').max = j1Pokemon.pointDeVie;
        document.getElementById('pointDeVieJ1').value = j1Pokemon.pointDeVie;
        document.getElementById('txtPointDeVieJ1').innerText = (`Vie : ${j1Pokemon.pointDeVie}`);
        document.querySelector('.j1BoutonAttaque1').innerText = (`${j1Pokemon.attaques.attaque_1.nom}`);
        document.querySelector('.j1BoutonAttaque2').innerText = (`${j1Pokemon.attaques.attaque_2.nom}`);
        document.querySelector('.j1BoutonAttaque3').innerText = (`${j1Pokemon.attaques.attaque_3.nom}`);
        document.querySelector('.j1BoutonAttaque4').innerText = (`${j1Pokemon.attaques.attaque_4.nom}`);
        document.querySelector('.imagePokemonJ1').src = j1Pokemon.image;
    });

    divJoueur2.addEventListener('click', () => {
        // Désélectionne la div précédemment sélectionnée
        if (selectedDivJoueur2) {
            selectedDivJoueur2.classList.remove('pokemonSelected');
        }
        // Sélectionne la div actuellement cliquée
        selectedDivJoueur2 = divJoueur2;
        selectedDivJoueur2.classList.add('pokemonSelected');
        
         //Atribution des valeurs pour le joueur 1
        switch(true){
            case divJoueur2.classList.contains('Pikachu'):
                j2Pokemon = Object.assign({}, Personnages[0]);
                break;
            
            case divJoueur2.classList.contains('Dracaufeu'):
                j2Pokemon = Object.assign({}, Personnages[1]);
                break;

            case divJoueur2.classList.contains('Tortank'):
                j2Pokemon = Object.assign({}, Personnages[2]);
                break;
                
            case divJoueur2.classList.contains('Florizarre'):
                j2Pokemon = Object.assign({}, Personnages[3]);
                break;

            default:
                console.log("nonJ2");
                break;          
        }
        console.log("J2 point de vie : " + j2Pokemon.pointDeVie);
        document.getElementById('pointDeVieJ2').max = j2Pokemon.pointDeVie;
        document.getElementById('pointDeVieJ2').value = j2Pokemon.pointDeVie;
        document.getElementById('txtPointDeVieJ2').innerText = (`Vie : ${j2Pokemon.pointDeVie}`);
        document.querySelector('.j2BoutonAttaque1').innerText = (`${j2Pokemon.attaques.attaque_1.nom}`);
        document.querySelector('.j2BoutonAttaque2').innerText = (`${j2Pokemon.attaques.attaque_2.nom}`);
        document.querySelector('.j2BoutonAttaque3').innerText = (`${j2Pokemon.attaques.attaque_3.nom}`);
        document.querySelector('.j2BoutonAttaque4').innerText = (`${j2Pokemon.attaques.attaque_4.nom}`);
        document.querySelector('.imagePokemonJ2').src = j2Pokemon.image;
    });

    // Ajoute la div au conteneur
    joueur1.appendChild(divJoueur1);
    joueur2.appendChild(divJoueur2);
});

//Bouton "prêt"
const j1BtnPret = document.querySelector('.j1BoutonPret') ;
const j2BtnPret = document.querySelector('.j2BoutonPret') ;

j1BtnPret.addEventListener('click', () => {
    j1BtnPret.classList = 'btnSelected';
    if(j2BtnPret.classList == 'btnSelected'){
        ecrSelection.style.display = "none";
        ecrCombat.style.display = "flex";
    }
});

j2BtnPret.addEventListener('click', () => {
    j2BtnPret.classList = 'btnSelected';
    if(j1BtnPret.classList == 'btnSelected'){
        ecrSelection.style.display = "none";
        ecrCombat.style.display = "flex";
    }
});


//PARTIE COMBAT
const txtGagnant = document.querySelector('.textGagnant');
let attaqueChoisi = null;

function leJ1Attaque() {
    const j1BtnAttques = document.querySelector('.J1boutonAttaques');
    const j1Attaque1 = document.querySelector('.j1BoutonAttaque1');
    const j1Attaque2 = document.querySelector('.j1BoutonAttaque2');
    const j1Attaque3 = document.querySelector('.j1BoutonAttaque3');
    const j1Attaque4 = document.querySelector('.j1BoutonAttaque4');

    function attaqueJ1() {
        j2Pokemon.pointDeVie = j2Pokemon.pointDeVie - attaqueChoisi.degats;
        document.getElementById('pointDeVieJ2').value = j2Pokemon.pointDeVie;
        document.getElementById('txtPointDeVieJ2').innerText = (`Vie : ${j2Pokemon.pointDeVie}`);
        if(j2Pokemon.pointDeVie <= 0) {
            txtGagnant.innerText ='Le joueur 1 à gagné !!!';
            ecrCombat.style.display = "none";
            ecrFin.style.display = "flex";
        };
      
    };

    //Le joueur 1 attaque
    j1BtnAttques.addEventListener('click', () => {
        document.querySelector('.actionJ1').style.display = "none";
        document.querySelector('.attaquesJ1').style.display = "grid";

        j1Attaque1.addEventListener('click', () => {
            attaqueChoisi = j1Pokemon.attaques.attaque_1;
            attaqueJ1();
        });
        
        j1Attaque2.addEventListener('click', () => {
            attaqueChoisi = j1Pokemon.attaques.attaque_2;
            attaqueJ1();
        });
        
        j1Attaque3.addEventListener('click', () => {
            attaqueChoisi = j1Pokemon.attaques.attaque_3;
            attaqueJ1();
        });
        
        j1Attaque4.addEventListener('click', () => {
            attaqueChoisi = j1Pokemon.attaques.attaque_4;
            attaqueJ1();
        });
    });
}

function leJ2Attaque() {
    const j2BtnAttques = document.querySelector('.J2boutonAttaques');
    const j2Attaque1 = document.querySelector('.j2BoutonAttaque1');
    const j2Attaque2 = document.querySelector('.j2BoutonAttaque2');
    const j2Attaque3 = document.querySelector('.j2BoutonAttaque3');
    const j2Attaque4 = document.querySelector('.j2BoutonAttaque4');

    function attaqueJ2() {
        j1Pokemon.pointDeVie = j1Pokemon.pointDeVie - attaqueChoisi.degats;
        document.getElementById('pointDeVieJ1').value = j1Pokemon.pointDeVie;
        document.getElementById('txtPointDeVieJ1').innerText = (`Vie : ${j1Pokemon.pointDeVie}`);
        if(j1Pokemon.pointDeVie <= 0)  {
            txtGagnant.innerText = 'Le joueur 2 à gagné !!!';
            ecrCombat.style.display = "none";
            ecrFin.style.display = "flex";
        };
    };
    
    //Le joueur 2 attaque
    j2BtnAttques.addEventListener('click', () => {
        document.querySelector('.actionJ2').style.display = "none";
        document.querySelector('.attaquesJ2').style.display = "grid";

        j2Attaque1.addEventListener('click', () => {
            attaqueChoisi = j2Pokemon.attaques.attaque_1;
            attaqueJ2();
        });
        
        j2Attaque2.addEventListener('click', () => {
            attaqueChoisi = j2Pokemon.attaques.attaque_2;
            attaqueJ2();
        });
        
        j2Attaque3.addEventListener('click', () => {
            attaqueChoisi = j2Pokemon.attaques.attaque_3;
            attaqueJ2();
        });
        
        j2Attaque4.addEventListener('click', () => {
            attaqueChoisi = j2Pokemon.attaques.attaque_4;
            attaqueJ2();
        });
    });
}


//PARTIE FIN
const btnRejouer = document.querySelector('.rejouer');
const btnChangerHero = document.querySelector('.changerHero');
let btnRetourAccueil = document.querySelector('.retourAccueil');

btnRejouer.addEventListener('click', () => {

    ecrFin.style.display = "none";
    ecrCombat.style.display = "flex";
});

btnChangerHero.addEventListener('click', () => {
    ecrFin.style.display = "none";
    ecrSelection.style.display = "flex";
});

btnRetourAccueil.addEventListener('click', () => {
    location.reload()
});

leJ1Attaque();
leJ2Attaque();
