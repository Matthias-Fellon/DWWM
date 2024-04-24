### Qu'est-ce que le DOM ?

Le DOM (Document Object Model) est une représentation hiérarchique des éléments HTML d'une page web. Il fournit une interface de programmation qui permet aux scripts JavaScript d'interagir avec les éléments HTML d'une page de manière dynamique. Chaque élément HTML de la page est représenté par un nœud dans l'arborescence DOM.

---
### Accès aux éléments DOM

JavaScript offre plusieurs méthodes pour accéder aux éléments du DOM. Vous pouvez utiliser des méthodes telles que `getElementById`, `getElementsByClassName`, `getElementsByTagName` ou `querySelector` pour sélectionner un élément en fonction de son ID, sa classe, son nom de balise ou un sélecteur CSS.

##### getElementById 

Cette méthode permet de sélectionner un élément du DOM en fonction de son ID.

```js
// Sélectionner un élément par son ID
let element = document.getElementById("monElement");
```

##### getElementsByClassName 

Cette méthode permet de sélectionner un ensemble d'éléments du DOM en fonction de leur classe

```js
// Sélectionner un ensemble d'éléments par leur classe
let elements = document.getElementsByClassName("maClasse");
```

##### getElementsByTagName : 

Cette méthode permet de sélectionner un ensemble d'éléments du DOM en fonction de leur nom de balise.

```js
// Sélectionner un ensemble d'éléments par leur nom de balise
let elements = document.getElementsByTagName("div");
```

##### querySelector :
Cette méthode permet de sélectionner un élément du DOM en fonction d'un sélecteur CSS.

```js
// Sélectionner un élément par un sélecteur CSS
let element = document.querySelector("#monId .maClasse");
```

---
### Modification du contenu HTML

Une fois qu'un élément DOM est sélectionné, vous pouvez modifier son contenu HTML en accédant à sa propriété `innerHTML` ou en modifiant ses propriétés `textContent` ou `innerText`. Ces méthodes permettent d'ajouter, de supprimer ou de modifier le contenu d'un élément HTML.

##### Modification avec innerHTML
Cette propriété permet de définir ou de récupérer le contenu HTML d'un élément.
`
```js
// Sélectionner un élément par son ID
let element = document.getElementById("monElement");

// Modifier le contenu HTML de l'élément
element.innerHTML = "<p>Nouveau contenu HTML</p>";
```

##### Modification avec textContent : 
Cette propriété permet de définir ou de récupérer le contenu texte d'un élément.

```js
// Sélectionner un élément par son ID
let element = document.getElementById("monElement");

// Modifier le contenu texte de l'élément
element.textContent = "Nouveau contenu texte";
```

##### Modification avec innerText 
Cette propriété est similaire à textContent mais elle prend en compte la mise en forme CSS et ne renvoie que le texte visible à l'écran.
```js
// Sélectionner un élément par son ID
let element = document.getElementById("monElement");

// Modifier le contenu texte visible de l'élément
element.innerText = "Nouveau contenu texte visible";
```

---
### Modification des styles CSS

JavaScript permet également de modifier les styles CSS des éléments du DOM en accédant à leur propriété `style`. Vous pouvez modifier les propriétés de style individuelles telles que `color`, `font-size`, `background-color`, etc., ou ajouter ou supprimer des classes CSS à l'élément en utilisant la propriété `classList`.

##### Modification des propriétés de style individuelles avec `style`

```js
// Sélectionner un élément par son ID
let element = document.getElementById("monElement");

// Modifier la couleur du texte
element.style.color = "red";

// Modifier la taille de la police
element.style.fontSize = "20px";

// Modifier la couleur de fond
element.style.backgroundColor = "lightblue";
```

##### Ajout ou suppression de classes CSS avec `classList` :

```js
// Sélectionner un élément par son ID
let element = document.getElementById("monElement");

// Ajouter une classe CSS à l'élément
element.classList.add("maClasse");

// Supprimer une classe CSS de l'élément
element.classList.remove("autreClasse");

// Vérifier si l'élément a une classe spécifique
let hasClass = element.classList.contains("maClasse");

// Bascule entre l'ajout et la suppression d'une classe
element.classList.toggle("active");
```

---

### Gestion des événements (click, hover, submit)

Les événements sont des actions qui se produisent sur une page web, comme un clic de souris, le passage du curseur sur un élément (hover), ou la soumission d'un formulaire. JavaScript permet de gérer ces événements en attachant des écouteurs d'événements à des éléments du DOM. Vous pouvez utiliser des méthodes telles que `addEventListener` pour attacher des fonctions de rappel qui seront exécutées lorsque l'événement spécifié se produit.

##### Gestion d'un événement click

```js
// Sélectionner un élément par son ID
let bouton = document.getElementById("monBouton");

// Ajouter un écouteur d'événement click à l'élément
bouton.addEventListener("click", function() {
    console.log("Le bouton a été cliqué !");
});
```

##### Gestion d'un événement hover :

```js
// Sélectionner un élément par son ID
let element = document.getElementById("monElement");

// Ajouter un écouteur d'événement mouseover à l'élément
element.addEventListener("mouseover", function() {
    console.log("Le curseur est passé sur l'élément !");
});
```

##### Gestion d'un événement submit (soumission de formulaire) :

```js
// Sélectionner un formulaire par son ID
let formulaire = document.getElementById("monFormulaire");

// Ajouter un écouteur d'événement submit au formulaire
formulaire.addEventListener("submit", function(event) {
    event.preventDefault(); // Empêcher le comportement par défaut du formulaire
    console.log("Le formulaire a été soumis !");
});
```