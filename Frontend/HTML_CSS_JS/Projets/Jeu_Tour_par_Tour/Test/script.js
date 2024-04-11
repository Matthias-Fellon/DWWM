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
    }
]
let j1Pokemon;
j1Pokemon = Object.assign({}, Personnages[0]);
console.log(j1Pokemon);

document.getElementById('pointDeVieJ1').value = j1Pokemon.pointDeVie;
document.getElementById('txtPointDeVieJ1').innerText = (`Vie : ${j1Pokemon.pointDeVie}`);
document.querySelector('.j1BoutonAttaque1').innerText = (`${j1Pokemon.attaques.attaque_1.nom}`);
document.querySelector('.j1BoutonAttaque2').innerText = (`${j1Pokemon.attaques.attaque_2.nom}`);
document.querySelector('.j1BoutonAttaque3').innerText = (`${j1Pokemon.attaques.attaque_3.nom}`);
document.querySelector('.j1BoutonAttaque4').innerText = (`${j1Pokemon.attaques.attaque_4.nom}`);
