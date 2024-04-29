
### Variables et types de données

En JavaScript, les variables sont utilisées pour stocker des données. La déclaration d'une variable se fait en utilisant les mots-clés `var`, `let` ou `const`. Voici quelques types de données pris en charge par JavaScript :

- Les types primitifs : `number`, `string`, `boolean`, `null`, `undefined`, `symbol`.
- Les types complexes : `object`, `array`, `function`.

---
### Opérateurs

JavaScript prend en charge divers opérateurs pour effectuer des opérations sur les données. Cela inclut les opérateurs arithmétiques (+, -, *, /, %), les opérateurs d'affectation (=, +=, -=, *=, /=), les opérateurs de comparaison (\==, \=\==, !=, !\==, >, <, >=, <=), etc.

##### Opérateurs arithmétiques :

```js
// Addition
const resultatAddition = 5 + 3; // résultatAddition vaut 8

// Soustraction
const resultatSoustraction = 10 - 4; // resultatSoustraction vaut 6

// Multiplication
const resultatMultiplication = 6 * 4; // resultatMultiplication vaut 24

// Division
const resultatDivision = 12 / 3; // resultatDivision vaut 4

// Modulo (reste de la division)
const resteDivision = 15 % 4; // resteDivision vaut 3
```

##### Opérateurs d'affectation :

```js
let x = 10;
x += 5; // équivaut à x = x + 5, donc x vaut maintenant 15

let y = 20;
y -= 8; // équivaut à y = y - 8, donc y vaut maintenant 12

let z = 7;
z *= 3; // équivaut à z = z * 3, donc z vaut maintenant 21
```

##### Opérateurs de comparaison :

```js
const a = 10;
const b = 5;

console.log(a == b); // false, a est-il égal à b ?
console.log(a != b); // true, a est-il différent de b ?
console.log(a > b); // true, a est-il supérieur à b ?
console.log(a < b); // false, a est-il inférieur à b ?
console.log(a >= b); // true, a est-il supérieur ou égal à b ?
console.log(a <= b); // false, a est-il inférieur ou égal à b ?
```

##### Autres opérateurs :

```js
const valeur = true;
console.log(!valeur); // false, opérateur de négation logique

const x = 5;
const y = '5';
console.log(x === y); // false, égalité stricte (vérifie également le type)
console.log(x == y); // true, égalité non stricte (ne vérifie pas le type)

const condition1 = true;
const condition2 = false;
console.log(condition1 && condition2); // false, ET logique
console.log(condition1 || condition2); // true, OU logique
```

---
### Structures de contrôle (if, else, switch)

Les structures de contrôle conditionnelles comme `if`, `else if` et `else` permettent d'exécuter différentes parties de code en fonction de conditions spécifiées. Le `switch` est utilisé pour sélectionner l'une des nombreuses sections de code à exécuter en fonction de la valeur d'une expression.
##### Utilisation de if/else :

```js
let temperature = 25;

if (temperature > 30) {
    console.log("Il fait chaud !");
} else if (temperature >= 20 && temperature <= 30) {
    console.log("Le temps est agréable.");
} else {
    console.log("Il fait frais.");
}
```

##### Utilisation de switch :

```js
let jour = 3;
let nomDuJour;

switch (jour) {
    case 1:
        nomDuJour = "Lundi";
        break;
    case 2:
        nomDuJour = "Mardi";
        break;
    case 3:
        nomDuJour = "Mercredi";
        break;
    case 4:
        nomDuJour = "Jeudi";
        break;
    case 5:
        nomDuJour = "Vendredi";
        break;
    case 6:
        nomDuJour = "Samedi";
        break;
    case 7:
        nomDuJour = "Dimanche";
        break;
    default:
        nomDuJour = "Jour invalide";
}

console.log("Aujourd'hui, c'est " + nomDuJour + ".");
```

---
### Boucles (for, while)

JavaScript prend en charge les boucles `for`, `while`, et `do...while` pour répéter des blocs de code tant qu'une condition spécifiée est vraie. La boucle `for` est souvent utilisée pour parcourir des tableaux ou des objets, tandis que `while` et `do...while` sont utilisés lorsque la condition de boucle est basée sur une évaluation booléenne.
##### Boucle for :

```js
// Afficher les nombres de 1 à 5 avec une boucle for
for (let i = 1; i <= 5; i++) {
    console.log(i);
}
```

##### Boucle while :

```js
// Afficher les nombres de 1 à 5 avec une boucle while
let j = 1;
while (j <= 5) {
    console.log(j);
    j++;
}
```

##### Boucle do...while :

```js
// Afficher les nombres de 1 à 5 avec une boucle do...while
let k = 1;
do {
    console.log(k);
    k++;
} while (k <= 5);

```

---
### Fonctions

Les fonctions en JavaScript sont des blocs de code réutilisables qui peuvent être appelés pour exécuter une tâche spécifique. Elles peuvent être définies à l'aide du mot-clé `function` et peuvent accepter des paramètres et renvoyer des valeurs.

##### Définition et appel d'une fonction :

```js
// Définition d'une fonction
function direBonjour() {
    console.log("Bonjour !");
}

// Appel de la fonction
direBonjour();
```

##### Fonction avec paramètres :
```js
// Définition d'une fonction prenant des paramètres
function additionner(a, b) {
    return a + b;
}

// Appel de la fonction avec des arguments
let resultat = additionner(3, 5);
console.log("Résultat de l'addition :", resultat); // Résultat attendu: 8
```

##### Fonction avec valeur de retour :
```js
// Définition d'une fonction renvoyant une valeur
function carre(x) {
    return x * x;
}

// Appel de la fonction et utilisation de la valeur retournée
let carreDeQuatre = carre(4);
console.log("Le carré de 4 est :", carreDeQuatre); // Résultat attendu: 16
```

---
### Commentaires

Les commentaires en JavaScript sont utilisés pour annoter le code et fournir des informations supplémentaires sur son fonctionnement. Il existe deux types de commentaires : les commentaires sur une seule ligne, qui commencent par `//`, et les commentaires sur plusieurs lignes, qui sont encapsulés entre `/*` et `*/`.
##### Commentaire sur une seule ligne :

```js
// Ceci est un commentaire sur une seule ligne
let x = 5; // Cette ligne déclare une variable et lui attribue la valeur 5
```
##### Commentaire sur plusieurs lignes :

```js
/*
Ceci est un commentaire sur plusieurs lignes.
Il peut être utilisé pour annoter un bloc de code entier.
*/
let y = 10; // Cette ligne déclare une autre variable
```
