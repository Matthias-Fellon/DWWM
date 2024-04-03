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
    const result = parseInt(Math.random() * (100 - 1) +1);
    let nombre = null;
    console.log(result);
    while(nombre != result){
        nombre = parseInt(prompt("1 Entrez un nombre entre 1 et 100 :"));
        if(nombre < result){
            alert("Trop petit");
        }
        if(nombre > result){
            alert("Trop grand");
        }

    }
    alert("GG t'as gagné !");
}
deviner();

//Exercice 4