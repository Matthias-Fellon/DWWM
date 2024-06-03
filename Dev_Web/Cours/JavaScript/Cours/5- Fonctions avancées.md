### Fonctions anonymes

Les fonctions anonymes, comme leur nom l'indique, sont des fonctions sans nom. Elles sont définies en utilisant l'expression de fonction et peuvent être assignées à une variable ou passées en tant qu'argument à d'autres fonctions. Par exemple :

```js
let maFonction = function() {
	console.log("Ceci est une fonction anonyme."); 
	}; 
maFonction();
```

Les fonctions anonymes sont souvent utilisées comme callbacks ou pour encapsuler du code qui ne sera pas réutilisé.

---
### Fonctions fléchées

Les fonctions fléchées sont une syntaxe plus concise pour définir des fonctions en JavaScript. Elles utilisent la syntaxe `() => {}` et ne possèdent pas leur propre contexte this. Par exemple :

```js
let addition = (a, b) => {     
	return a + b; 
	}; 

console.log(addition(3, 4)); // Affiche 7
```

Les fonctions fléchées sont souvent utilisées pour des fonctions anonymes ou des fonctions de rappel.

---
### Callbacks

Un callback est une fonction passée en tant qu'argument à une autre fonction, qui sera ensuite appelée une fois que l'opération de la fonction principale est terminée. Les callbacks sont couramment utilisés pour gérer des opérations asynchrones en JavaScript. Par exemple :

```js
function effectuerAction(callback) {
	// Effectuer une opération     
	callback(); }  

function maFonctionCallback() {
	console.log("L'opération est terminée."); 
	}  

effectuerAction(maFonctionCallback);
```

---
### Promesses (Promise)

Les promesses sont un moyen plus moderne de gérer les opérations asynchrones en JavaScript. Une promesse représente une valeur qui peut être disponible maintenant, dans le futur ou jamais. Elle peut être dans l'un des trois états : `pending` (en attente), `fulfilled` (accomplie), ou `rejected` (rejetée). Les promesses permettent d'exécuter du code de manière asynchrone et de traiter les résultats ou les erreurs une fois qu'ils sont disponibles. Par exemple :

```js
let maPromesse = new Promise((resolve, reject) => {     
	// Effectuer une opération asynchrone     
	if (/* opération réussie */) { 
		resolve("Résultat de l'opération.");     
	} else {
	    reject("Erreur lors de l'opération.");
	} 
});  

maPromesse.then((resultat) => {     
	console.log(resultat); // Affiche le résultat 
	})
	.catch((erreur) => {     
	console.error(erreur); // Affiche l'erreur 
	});
```

Les promesses offrent un moyen plus clair et plus flexible de gérer les opérations asynchrones par rapport aux callbacks. Elles sont largement utilisées dans le développement moderne en JavaScript.