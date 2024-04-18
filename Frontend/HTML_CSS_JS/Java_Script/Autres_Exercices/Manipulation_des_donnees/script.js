let data = {
    "id": "0001",
    "type": "gateau",
    "nom": "donuts",
    "price": 0.55,
    "nappages":
    {
        "nappage":
        [
            { "id": "1001", "type": "Chocolat" },
            { "id": "1002", "type": "Fraise" },
            { "id": "1003", "type": "Framboise" },
            { "id": "1004", "type": "Vanille" }
        ]
    },
    "topping":
    [
        { "id": "5001", "type": "Sans Topping" },
        { "id": "5002", "type": "Perles de sucre" },
        { "id": "5003", "type": "Copos de coco" },
        { "id": "5004", "type": "Billes de chocolat" },
        { "id": "5005", "type": "Vermisselles de chocolat" },
    ]
}

const selectBody = document.querySelector('body')

function card() {
    const card = document.createElement('div');
    card.classList.add = "card";
    const cardStyles = {
        height: "fit-content", width: "400px", backgroundColor: "bisque", borderRadius: "20px", display: "flex", flexFlow: "column wrap", alignItems: "center"
    };
    Object.assign(card.style, cardStyles); //Assigne "cardStyles" au style de "card"
    selectBody.appendChild(card);
    
    const titre = document.createElement('h1');
    titre.textContent = data.nom + " / " + data.type;
    card.appendChild(titre);

    const prix = document.createElement('p');
    prix.textContent = `Prix : ${data.price}€`;
    card.appendChild(prix);

    //Affichage des nappages
    const ul = document.createElement('ul');
    ul.textContent = "Nappages :"
    data.nappages.nappage.forEach(element => {
        const li = document.createElement('li');
        li.textContent = element.type;
        ul.appendChild(li);
    });
    card.appendChild(ul);
}
card();

function formulaire() {
    //Créé un formulaire
    const formulaire = document.createElement('div');
    formulaire.className = "formulaire";
    const formulaireStyles = {
        height: "500px", width: "400px", backgroundColor: "lightBlue", borderRadius: "20px", display: "flex", flexFlow: "column wrap", alignItems: "center", justifyContent: "space-between"
    };
    Object.assign(formulaire.style, formulaireStyles); //Assigne "formulaireStyles" au style de "formulaire"
    selectBody.appendChild(formulaire);

    
    const divNappages = document.createElement('div');
    divNappages.className = "nappages";
    formulaire.appendChild(divNappages);
    functCreerInput("Nappages", data.nappages.nappage, document.querySelector('.formulaire .nappages')); //Affichage des nappages
    
    const divTopping = document.createElement('div');
    divTopping.className = "topping";
    formulaire.appendChild(divTopping);
    functCreerInput("Topping", data.topping, document.querySelector('.formulaire .topping')); //Affichage des topping

    const divSelection = document.createElement('div');
    divSelection.style.display = "flex";
    divSelection.style.flexDirection = "column";
    divSelection.style.alignItemst = "center";
    formulaire.appendChild(divSelection);

    const bouton = document.createElement('button');
    bouton.textContent = "Valider";
    bouton.addEventListener("click", () => {
        const inputValues = [];
        // Sélection de tous les inputs du formulaire
        const inputs = document.querySelectorAll('input');

        // Parcours de tous les inputs et récupération de leurs valeurs
        inputs.forEach(input => {
            // Si c'est une case à cocher, récupérer la propriété 'checked' plutôt que 'value'
            if (input.checked) {
                inputValues.push(input.value);
            }
        });
        console.log("Input Values:", inputValues);
        const h2 = document.createElement('h2');
        h2.textContent = `Nappages : ${inputValues[0]} / Topping : ${inputValues[1]}`;
        divSelection.appendChild(h2);
    })
    divSelection.appendChild(bouton);

}
formulaire();

function functCreerInput(nom, data, parent) {
    const titre = document.createElement('h1');
    titre.textContent = nom;
    titre.style.textAlign = "center";
    parent.appendChild(titre);
    data.forEach(element => {
        const inputRadio = document.createElement('input')
        inputRadio.type = "radio"
        inputRadio.id = `${nom}${element.type}`
        inputRadio.name = nom;
        inputRadio.value = element.type
        parent.appendChild(inputRadio)
        
        const labelRadio = document.createElement('label')
        labelRadio.htmlFor = `${nom}${element.type}`
        labelRadio.textContent = element.type
        parent.appendChild(labelRadio)
    });
}
