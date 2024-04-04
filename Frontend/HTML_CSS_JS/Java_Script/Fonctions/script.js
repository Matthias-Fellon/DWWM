//Exercice 1
// function sumOfEvenNumbers(tab){
//     return tab.filter(number => number % 2 === 0);
// }

// const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// console.log(sumOfEvenNumbers(numbers));

//Exercice 2
// function mergeArrays(tab1, tab2){
//     // console.log(tab1 + " / " +tab1.length);
//     // console.log(tab2 + " / " +tab2.length);
//     for(let i=0; i<tab2.length; i++){
//         tab1.splice(tab1.length , 0, tab2[i]);
//     }
//     return tab1;
// }

// const arr1 = [1, 2, 3];
// const arr2 = [4, 5, 6];
// console.log(mergeArrays(arr1, arr2)); // Résultat attendu : [1, 2, 3, 4, 5, 6]


//Exercice 3
function removeDuplicates(tab){
    const filtered = tab.filter((element, index) => { //filter((element, index)) : parcours un tableau element par element, index permet d'obtenir sa position dans le tableau
        return tab.indexOf(element) === index; //indexOf(element) : retourn l'index de la premiere occurence de l'element
    });
}
const fruits = ['Apple', 'Banana', 'Apple', 'Orange', 'Banana', 'Apple'];
console.log("Filtré : " + removeDuplicates(fruits)); // Résultat attendu : ['Apple', 'Banana', 'Orange']

//Exercice 4

//Exercice 5