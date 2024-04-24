
let tab = [
    {
        nomClass : "archer",
        pv : 10,
        atk : 5,
        img : "img/archer.jpg"
    },
    {
        nomClass : "guerrier",
        pv : 20,
        atk : 3,
        img : "img/guerrier.jpg"
    },
    {
        nomClass : "mage",
        pv : 8,
        atk : 8,
        img : "img/mage.jpg"
    },
    {
        nomClass : "pretre",
        pv : 30,
        atk : 1,
        img : "img/pretre.jpg"
    }
];
const btnStartGame = document.querySelector('.btnStartGame')
const sectionAccueil = document.querySelector('.sectionAccueil')
const sectionSelectCharacter = document.querySelector('.sectionSelectCharacter')
const sectionBattle = document.querySelector('.sectionBattle')
let player1;
let player2;
let player1Name;
let player2Name
btnStartGame.addEventListener('click', () => {
    sectionAccueil.style.display = "none"
    sectionSelectCharacter.style.display = "flex"
})

const player1Archer = document.querySelector('.player1Archer')
const player1Guerrier = document.querySelector('.player1Guerrier')
const player1Mage = document.querySelector('.player1Mage')
const player1Pretre = document.querySelector('.player1Pretre')

player1Archer.addEventListener('click', () => {
    player1Archer.style.borderColor = "Orange"
    player1Guerrier.style.borderColor = "white"
    player1Mage.style.borderColor = "white"
    player1Pretre.style.borderColor = "white"
    player1 = Object.assign({}, tab[0])
})
player1Guerrier.addEventListener('click', () => {
    player1Archer.style.borderColor = "white"
    player1Guerrier.style.borderColor = "Orange"
    player1Mage.style.borderColor = "white"
    player1Pretre.style.borderColor = "white"
    player1 = Object.assign({}, tab[1])
})
player1Mage.addEventListener('click', () => {
    player1Archer.style.borderColor = "white"
    player1Guerrier.style.borderColor = "white"
    player1Mage.style.borderColor = "Orange"
    player1Pretre.style.borderColor = "white"
    player1 = Object.assign({}, tab[2])
})
player1Pretre.addEventListener('click', () => {
    player1Archer.style.borderColor = "white"
    player1Guerrier.style.borderColor = "white"
    player1Mage.style.borderColor = "white"
    player1Pretre.style.borderColor = "Orange"
    player1 = Object.assign({}, tab[3])
})

const player2Archer = document.querySelector('.player2Archer')
const player2Guerrier = document.querySelector('.player2Guerrier')
const player2Mage = document.querySelector('.player2Mage')
const player2Pretre = document.querySelector('.player2Pretre')

player2Archer.addEventListener('click', () => {
    player2Archer.style.borderColor = "Orange"
    player2Guerrier.style.borderColor = "white"
    player2Mage.style.borderColor = "white"
    player2Pretre.style.borderColor = "white"
    player2 = Object.assign({}, tab[0])
})
player2Guerrier.addEventListener('click', () => {
    player2Archer.style.borderColor = "white"
    player2Guerrier.style.borderColor = "Orange"
    player2Mage.style.borderColor = "white"
    player2Pretre.style.borderColor = "white"
    player2 = Object.assign({}, tab[1])
})
player2Mage.addEventListener('click', () => {
    player2Archer.style.borderColor = "white"
    player2Guerrier.style.borderColor = "white"
    player2Mage.style.borderColor = "Orange"
    player2Pretre.style.borderColor = "white"
    player2 = Object.assign({}, tab[2])
})
player2Pretre.addEventListener('click', () => {
    player2Archer.style.borderColor = "white"
    player2Guerrier.style.borderColor = "white"
    player2Mage.style.borderColor = "white"
    player2Pretre.style.borderColor = "Orange"
    player2 = Object.assign({}, tab[3])
})


const btnStartBattle = document.querySelector('.btnStartBattle')
btnStartBattle.addEventListener('click', () => {
    console.log(player1, player2);
    if (player1 == undefined){
        return 
    }
    if (player2 == undefined){
        return 
    }
    const inputPlayer1 = document.querySelector('.inputPlayer1');
    const inputPlayer2 = document.querySelector('.inputPlayer2');
    const battlePlayer1 = document.querySelector('.player1Name');
    const battlePlayer2 = document.querySelector('.player2Name');
    battlePlayer1.textContent = inputPlayer1.value;
    battlePlayer2.textContent = inputPlayer2.value;
    sectionSelectCharacter.style.display = "none";
    const namePersonnage1 = document.querySelector('.namePersonnage1');
    const namePersonnage2 = document.querySelector('.namePersonnage2');
    console.log(namePersonnage1);
    console.log(namePersonnage2);
    sectionBattle.style.display = "block";
    namePersonnage1.textContent = player1.nomClass
    namePersonnage2.textContent = player2.nomClass

    const imgPerso1 = document.querySelector('.imgPerso1')
    imgPerso1.src = player1.img
    const imgPerso2 = document.querySelector('.imgPerso2')
    imgPerso2.src = player2.img
})

