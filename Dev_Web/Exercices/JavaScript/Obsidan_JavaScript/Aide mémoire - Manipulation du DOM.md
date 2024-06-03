
Sélectionner des éléments dans le DOM
```js
document.getElementById() // Récupère le premier élément id
```

```js
document.querySelector() // Récupère le premier élément css
```

```js
document.querySelectorAll() // Récupère un tableau des éléments css
```

```js
document.getElementsByClassName() // Récupère un tableau des élements avec la class sélectionnée
```

```js
document.getElementsByTagName() // Récupère un tableau des balises
```

---

Écouteurs d'événements
```js
const button = document.getElementById('myButton');
button.addEventListener('click', function() {
    alert('Bouton cliqué!');
});
```
Utilisée pour attacher un écouteur d'événement à un élément HTML, permettant d'exécuter une fonction spécifique lorsque l'événement se produit.

Voici une liste de quelques addEventListener les plus utilisés :

- Click
- Submit
- Change
- Keydown / Keyup
- Mouseover / Mouseout
- Focus
- Scroll
