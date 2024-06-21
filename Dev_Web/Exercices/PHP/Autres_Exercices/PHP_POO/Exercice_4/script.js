const selectBody = document.querySelector('body');
const modifProduit = document.getElementById("ModifProduit");

modifProduit.addEventListener("click", (event) => {
    event.preventDefault();

    const formulaire = document.createElement('form');
    formulaire.className = "formulaire";
    formulaire.action = "index.php";
    formulaire.method = "POST";
 

    const getParent = modifProduit.parentElement;
    getParent.appendChild(formulaire);
});