// let Personnages = [
//     {
//         nom : 'Mage',
//         pointDeVie : 30,
//         attaque : 10,
//         defense : 5,
//         image : '../Images/Mage.png'
//     },
//     {
//         nom : 'Guerrier',
//         pointDeVie : 40,
//         attaque : 10,
//         defense : 3,
//         image : '../Images/Mage.png'
//     },
//     {
//         nom : 'Prêtre',
//         pointDeVie : 50,
//         attaque : 2,
//         defense : 2,
//         image : '../Images/Mage.png'
//     },
//     {
//         nom : 'Archer',
//         pointDeVie : 20,
//         attaque : 5,
//         defense : 1,
//         image : '../Images/Mage.png'
//     }
// ];


// // Sélectionne l'élément où tu veux ajouter les divs
// const joueur1 = document.querySelector('.joueur1');
// const joueur2 = document.querySelector('.joueur2');
// const selectedDivJoueur1 = null; // Garder une trace de la div sélectionnée
// const selectedDivJoueur2 = null; // Garder une trace de la div sélectionnée

// // Parcours le tableau Personnages
// Personnages.forEach(personnage => {
//     // Crée un nouvel élément div
//     const divJoueur1 = document.createElement('div');
//     const divJoueur2 = document.createElement('div');
//     divJoueur1.classList.add(`${personnage.nom}`);
//     divJoueur2.classList.add(`${personnage.nom}`);

//     // Remplit le contenu de la div avec les données du personnage
//     divJoueur1.innerHTML = `
//         <div class="description">
//             <p><strong>Nom:</strong> ${personnage.nom}</p>
//             <div class="attributs">
//                 <p><strong>Points de Vie:</strong> ${personnage.pointDeVie}</p>
//                 <p><strong>Attaque:</strong> ${personnage.attaque}</p>
//                 <p><strong>Défense:</strong> ${personnage.defense}</p>
//             </div>
//         </div>
//         <img class="image${personnage.nom}" src="${personnage.image}" alt="Image pixel ${personnage.nom}">
//     `;

//     divJoueur2.innerHTML = `
//     <div class="description">
//         <p><strong>Nom:</strong> ${personnage.nom}</p>
//         <div class="attributs">
//             <p><strong>Points de Vie:</strong> ${personnage.pointDeVie}</p>
//             <p><strong>Attaque:</strong> ${personnage.attaque}</p>
//             <p><strong>Défense:</strong> ${personnage.defense}</p>
//         </div>
//     </div>
//     <img class="image${personnage.nom}" src="${personnage.image}" alt="Image pixel ${personnage.nom}">
// `;

//     divJoueur1.addEventListener('click', () => {
//         // Désélectionne la div précédemment sélectionnée
//         if (selectedDivJoueur1) {
//             selectedDivJoueur1.classList.remove('selected');
//         }
//         // Sélectionne la div actuellement cliquée
//         selectedDivJoueur1 = divJoueur1;
//         selectedDivJoueur1.classList.add('selected');
//     });

//     divJoueur2.addEventListener('click', () => {
//         // Désélectionne la div précédemment sélectionnée
//         if (selectedDivJoueur2) {
//             selectedDivJoueur2.classList.remove('selected');
//         }
//         // Sélectionne la div actuellement cliquée
//         selectedDivJoueur2 = div;
//         selectedDivJoueur2.classList.add('selected');
//     });

//     // Ajoute la div au conteneur
//     joueur1.appendChild(divJoueur1);
//     joueur2.appendChild(divJoueur2);
// });


