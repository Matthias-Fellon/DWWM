//EXERCICE 1
const btn_Ex1 = document.querySelector(".add_txt");
btn_Ex1.addEventListener("click", () => {
    const add_p = document.querySelector(".p1").innerText = "Hello World !";
});

//EXERCICE 2
const btn_Ex2 = document.querySelector(".change_couleur");
btn_Ex2.addEventListener("click", () => {
    const p_color = document.querySelector(".p2").style.color = 'red';
});

//EXERCICE 3
const btn_Ex3 = document.querySelector(".add_element");
btn_Ex3.addEventListener("click", () => {
    const li = document.createElement("li");
    li.textContent = "Nouvel Element";

    const ul = document.querySelector(".liste1").appendChild(li);
});

//EXERCICE 4
const btn_Ex4 = document.querySelector(".supp_element");
btn_Ex4.addEventListener("click", () => {
    const ul = document.querySelector(".liste2")
    ul.removeChild(ul.firstElementChild); // OU "ul.children[0].remove();"
});

//EXERCICE 5
// Sélectionner tous les boutons et leur ajouter un gestionnaire d'événements
const buttons = document.querySelectorAll(".bouton");
// console.log(buttons);
buttons.forEach(button => {
    // console.log(button);
    button.addEventListener("click", (event) => {
        // console.log(event);
        console.log("Vous avez cliqué sur le bouton avec l'identifiant : " + event.target.id);
    });
});

