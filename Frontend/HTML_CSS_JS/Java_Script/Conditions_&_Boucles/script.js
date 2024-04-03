// //Exercice 1
// function Age(age){
//     if(age<18){console.log("Mineur");}
//     else{console.log("Majeur");}
// }
// Age(prompt("Entrez un âge : "));

// //Exercice 2
// function pair(){
//     for(let i=0; i<=20; i++){
//         if(i%2 == false){
//             console.log(i);
//         }
//     }
// }
// pair();

//Exercice 3

function deviner(){
    // const result = Math.floor((Math.random() * 100) +1); //probleme 
    const result = parseInt((Math.random() * 100) +1);
    console.log(result);
    let nombre = parseInt(prompt("Entrez un nombre entre 1 et 100 :"));
    while(nombre != result){
        if(nombre < result){
            prompt("Trop petit");
        }
        if(nombre > result){
            prompt("Trop grand");
        }
        if(nombre == result){
            alert("GG t'as gagné !");
        }
    }
}
deviner();

//Exercice 4

// function calendrier(mois){

//     switch (mois){
//         case 1: case 3: case 5: case 7: case 8: case 10: case 12:
//             console.log("il y a 31 jours dans ce mois");
//             break;

//         case 4: case 6: case 9: case 11:
//             console.log("il y a 30 jours dans ce mois");
//             break;
        
//         case 2:
//             const annee = (new Date().getFullYear())%4;
//             // console.log(annee);
//             if(annee == 0){
//                 console.log("il y a 29 jours dans ce mois cette année-ci");
//             }
//             else{
//                 console.log("il y a 28 jours dans ce mois cette année-ci");
//             }
//             break;
//     }
// }
// calendrier(parseInt(prompt("Entrez un mois :")));