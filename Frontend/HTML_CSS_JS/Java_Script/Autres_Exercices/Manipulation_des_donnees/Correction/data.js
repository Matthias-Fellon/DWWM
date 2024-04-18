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

const card = document.createElement('div')
const body = document.querySelector('body')
card.classList.add("card")
body.appendChild(card)

let conc = data.nom + " " + data.type


const h1 = document.createElement('h1')
h1.textContent = conc
card.appendChild(h1)

const para = document.createElement('p')
para.textContent = data.price + "€"
card.appendChild(para)

data.nappages.nappage.forEach(element => {
    const nappagePara = document.createElement('p')
    nappagePara.textContent = element.type
    card.appendChild(nappagePara)

})


const form = document.createElement('form')
body.appendChild(form)

data.nappages.nappage.forEach(element => {
    const inputRadio = document.createElement('input')
    inputRadio.type = "radio"
    inputRadio.id = element.type
    inputRadio.name = "nappage"
    inputRadio.value = element.type
    form.appendChild(inputRadio)

    const labelRadio = document.createElement('label')
    labelRadio.htmlFor = element.type
    labelRadio.textContent = element.type
    form.appendChild(labelRadio)
})

const br = document.createElement('br')
form.appendChild(br)

data.topping.forEach(element => {
    console.log(element.type);
    const inputRadio = document.createElement('input')
    inputRadio.type = "radio"
    inputRadio.id = element.type
    inputRadio.name = "topping"
    inputRadio.value = element.type
    form.appendChild(inputRadio)
    
    const labelRadio = document.createElement('label')
    labelRadio.htmlFor = element.type
    labelRadio.textContent = element.type
    form.appendChild(labelRadio)
})

const btn = document.createElement('button')
btn.textContent = "Valider"
btn.addEventListener("click", () => {
    const h2 = document.createElement('h2')
})
const br2 = document.createElement('br')
form.appendChild(br2)

form.appendChild(btn)

// Tous les napages possible à l'aide d'un input de type radio
// Tous les toppings possible à l'aide d'un autre input de type radio
// Un bouton
// Un écouteur d'événement sur le bouton qui permettra d'afficher dans un h2 le type de nappage et le type de topping