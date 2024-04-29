
### push()
```js
Array.push(element1, ..., elementN)
```
`element1, ..., elementN` : Les éléments à ajouter à la fin du tableau.
Exemple :
```js
const fruits = ['apple', 'banana'];
fruits.push('orange', 'pear');
// fruits vaut maintenant ['apple', 'banana', 'orange', 'pear']
```

---
### pop()
```js
const lastElement = array.pop()
```
La méthode `pop()` supprime le dernier élément d'un tableau et renvoie cet élément.

Exemple :
```js
const fruits = ['apple', 'banana', 'orange'];
const lastFruit = fruits.pop();
// lastFruit vaut maintenant 'orange', et fruits vaut ['apple', 'banana']
```

---
### splice()
```js
array.splice(start, deleteCount, item1, ..., itemN)
```
La méthode `splice()` modifie le contenu d'un tableau en supprimant ou en remplaçant des éléments existants et/ou en ajoutant de nouveaux éléments à l'aide de l'édition en place.
- `start` : L'indice à partir duquel commencer la modification du tableau.
- `deleteCount` : Le nombre d'éléments à supprimer à partir de `start`.
- `item1, ..., itemN` (optionnel) : Les éléments à ajouter au tableau, à partir de `start`.

Exemple :
```js
const months = ['Jan', 'March', 'April', 'June'];
months.splice(1, 0, 'Feb');
// months vaut maintenant ['Jan', 'Feb', 'March', 'April', 'June']
```

---
### slice()
```js
const newArray = array.slice(begin, end)
```
La méthode `slice()` renvoie une portion du tableau dans un nouveau tableau.
- `begin` (optionnel) : L'indice de début, inclus dans la portion du tableau à extraire.
- `end` (optionnel) : L'indice de fin, exclus de la portion du tableau à extraire.

Exemple :
```js
const fruits = ['Banana', 'Orange', 'Lemon', 'Apple', 'Mango'];
const citrus = fruits.slice(1, 3);
// citrus vaut ['Orange', 'Lemon'], et fruits reste ['Banana', 'Orange', 'Lemon', 'Apple', 'Mango']
```

---
### forEach
```js
Array.prototype.forEach()
```
La méthode `forEach()` exécute une fonction donnée une fois pour chaque élément d'un tableau.

Exemple :
```js
const numbers = [1, 2, 3, 4, 5];

numbers.forEach(function(number) {
  console.log(number);
});
// Cela va afficher dans la console chaque nombre, un par un
```

---
### map()
```js
Array.prototype.map()
```
La méthode `map()` crée un nouveau tableau avec les résultats de l'appel d'une fonction fournie sur chaque élément du tableau d'origine.
Exemple :
```js
const numbers = [1, 2, 3, 4, 5];
const doubled = numbers.map(function(number) {
  return number * 2;
});
// doubled vaut maintenant [2, 4, 6, 8, 10]
```

---
### filter()
```js
Array.prototype.filter()
```
La méthode `filter()` crée un nouveau tableau avec tous les éléments du tableau qui passent un test donné par une fonction fournie.
Exemple :
```js
const numbers = [1, 2, 3, 4, 5];
const filtered = numbers.filter(function(number) {
  return number % 2 === 0;
});
// filtered vaut maintenant [2, 4]
```

---
### reduce()
```js
Array.prototype.reduce()
```
La méthode `reduce()` applique une fonction sur chaque élément du tableau pour réduire le tableau à une seule valeur.
Exemple :
```js
const numbers = [1, 2, 3, 4, 5];
const sum = numbers.reduce(function(accumulator, currentValue) {
  return accumulator + currentValue;
}, 0);
// sum vaut maintenant 15
```

