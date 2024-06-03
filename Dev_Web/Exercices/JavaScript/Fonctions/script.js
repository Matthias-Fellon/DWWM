//EXERCICE 1
// 
const btn_Ex1 = document.querySelector(".sum");
btn_Ex1.addEventListener("click", () => {
    function sumOfEvenNumbers(tab){
        const nb_pairs = tab.filter(number => number % 2 === 0);
        // console.log(nb_pairs);
        const som_nb_pair = nb_pairs.reduce((accumulator, currentValue) => {
            const result = accumulator + currentValue;
            return result;
        });
        return(som_nb_pair);
    }
    const numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    // console.log(sumOfEvenNumbers(numbers));
    const p1 = document.createElement("p");
    p1.innerText = `Somme des nombres pairs : ${sumOfEvenNumbers(numbers)}`;
    document.querySelector(".Ex_1").appendChild(p1);
});



//EXERCICE 2
const btn_Ex2 = document.querySelector(".fusion");
btn_Ex2.addEventListener("click", () => {
    function mergeArrays(tab1, tab2){
        return tabFinal = [...tab1, ...tab2];
    }
    const arr1 = [1, 2, 3];
    const arr2 = [4, 5, 6];
    // console.log(mergeArrays(arr1, arr2)); // Résultat attendu : [1, 2, 3, 4, 5, 6]
    const p2 = document.createElement("p");
    p2.innerText = `Tableau 1 : ${arr1}\nTableau 2 : ${arr2}\nFusion : ${mergeArrays(arr1, arr2)}`;
    document.querySelector(".Ex_2").appendChild(p2);
});


//EXERCICE 3
const btn_Ex3 = document.querySelector(".supp");
btn_Ex3.addEventListener("click", () => {
    function removeDuplicates(tab){
        const filtered = tab.filter((element, index) => { //filter((element, index)) : parcours un tableau element par element, index permet d'obtenir sa position dans le tableau
            return tab.indexOf(element) === index; //indexOf(element) : retourn l'index de la premiere occurence de l'element
        });
    }
    const fruits = ['Apple', 'Banana', 'Apple', 'Orange', 'Banana', 'Apple'];
    console.log("Filtré : " + removeDuplicates(fruits)); // Résultat attendu : ['Apple', 'Banana', 'Orange']

    console.log(fruits);
    console.log(removeDuplicates(fruits));
    const p3 = document.createElement("p");
    p3.innerText = `Tableau avec doublons : ${fruits}\nTableau sans doublons : ${removeDuplicates(fruits)}`; // ! PROBLEMES
    document.querySelector(".Ex_3").appendChild(p3);  
});

// function removeDuplicates(tab){
//     const filtered = tab.filter((element, index) => { //filter((element, index)) : parcours un tableau element par element, index permet d'obtenir sa position dans le tableau
//         return tab.indexOf(element) === index; //indexOf(element) : retourn l'index de la premiere occurence de l'element
//     });
// }
// const fruits = ['Apple', 'Banana', 'Apple', 'Orange', 'Banana', 'Apple'];
// console.log("Filtré : " + removeDuplicates(fruits)); // Résultat attendu : ['Apple', 'Banana', 'Orange']



//EXERCICE 4
const btn_Ex4 = document.querySelector(".verif");
btn_Ex4.addEventListener("click", () => {
    function name(){
    }

    const p4 = document.createElement("p");
    p4.innerText = `Ex 4 : ${name()}`;
    document.querySelector(".Ex_4").appendChild(p4); 
});



//EXERCICE 5
const btn_Ex5 = document.querySelector(".occurence");
btn_Ex5.addEventListener("click", () => {
    function name(){
    }

    const p5 = document.createElement("p");
    p5.innerText = `Ex 5 : ${name()}`;
    document.querySelector(".Ex_5").appendChild(p5); 
});