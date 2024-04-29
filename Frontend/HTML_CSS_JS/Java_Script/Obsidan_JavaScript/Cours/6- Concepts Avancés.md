### Portée des variables (scope)

La portée des variables en JavaScript fait référence à la visibilité des variables dans différentes parties du code. JavaScript prend en charge la portée locale et la portée globale des variables. Les variables déclarées à l'intérieur d'une fonction sont locales à cette fonction et ne sont pas accessibles en dehors de celle-ci, tandis que les variables déclarées à l'extérieur de toutes les fonctions sont globales et peuvent être accessibles de n'importe où dans le script. Par exemple :

```js
function maFonction() {
    let variableLocale = "Je suis locale.";
    console.log(variableLocale); // Affiche "Je suis locale."
}

maFonction();
console.log(variableLocale); // Erreur : variableLocale n'est pas définie

```

---
### Closures

Les closures sont une fonction interne qui a accès à la portée de la fonction externe dans laquelle elle a été définie, même après que la fonction externe ait terminé son exécution. Les closures capturent les variables locales de la fonction externe et les maintiennent en mémoire même après que la fonction externe ait été exécutée. Cela permet de créer des fonctions avec un état persistant. Par exemple :

```js
function compteur() {
    let compte = 0;
    function incrementer() {
        compte++;
        console.log(compte);
    }
    return incrementer;
}

let monCompteur = compteur();
monCompteur(); // Affiche 1
monCompteur(); // Affiche 2
```

---
### Programmation asynchrone

La programmation asynchrone en JavaScript permet d'exécuter des opérations sans bloquer l'exécution du reste du code. Cela est souvent utilisé pour effectuer des opérations telles que les requêtes réseau, les lectures/écritures de fichiers, etc., sans interrompre l'exécution du script. JavaScript prend en charge la programmation asynchrone à l'aide de callbacks, de promesses et de l'API `async/await`. Par exemple :

```js
// Utilisation d'une promesse
function effectuerRequete() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve("Réponse de la requête.");
        }, 2000);
    });
}

effectuerRequete().then((reponse) => {
    console.log(reponse); // Affiche "Réponse de la requête."
}).catch((erreur) => {
    console.error(erreur);
});

// Utilisation de l'API async/await
async function effectuerRequeteAsync() {
    try {
        let reponse = await effectuerRequete();
        console.log(reponse); // Affiche "Réponse de la requête."
    } catch (erreur) {
        console.error(erreur);
    }
}

effectuerRequeteAsync();

```

La programmation asynchrone est essentielle pour créer des applications réactives et performantes en JavaScript, en permettant l'exécution efficace de tâches non bloquantes.