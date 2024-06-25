document.addEventListener("DOMContentLoaded", function() {
    const modifyButtons = document.querySelectorAll(".ModifProduit");

    modifyButtons.forEach(button => {
        button.addEventListener("click", function() {
           // Si le formulaire de ce produit existe alors l'afficher sinon le creer
           if (button.parentElement.parentElement.querySelector('form')) {
                // Afficher ou désafficher le formulaire
                button.parentElement.parentElement.querySelector('form').classList.toggle("showHide");
            } else {
                // Récupération des données du produit
                const nom = this.dataset.nom;
                const prix = this.dataset.prix;
                const quantite = 0;

                // Création du formulaire
                const formHtml = `
                    <!-- Formulaire de modification -->
                    <form class="formModifProduit showHide" id="formModifProduit" nom="${nom}" action="index.php" method="POST">
                        <label for="nom">Nom: </label><br>
                        <input type="text" name="nom" id="nom" value="${nom}" readonly>
                        
                        <label for="prix">Prix: </label><br>
                        <input type="number" name="prix" id="prix" step="0.01" value="${prix}">
                        
                        <div class="addSuppQuantite">
                            <label for="addSupp">Quantité:</label>
                            <select name="addSupp" id="addSupp">
                                <option name"addSupp" value="ajouter">Ajouter</option>
                                <option name"addSupp" value="enlever">Enlever</option>
                            </select>
                            <input type="number" name="quantite" id="quantite" value="${quantite}">
                        </div>

                        <input type="submit" value="Enregistrer">
                    </form>
                `;

                // Insérer le formulaire après les informations du produit
                this.parentElement.insertAdjacentHTML('afterend', formHtml);

                // Ajout d'un écouteur d'événement pour la soumission du formulaire
                const editForm = document.querySelector(`form[nom='${nom}']`);
                editForm.addEventListener("submit", function(event) {
                    event.preventDefault;
                    let data = {
                        "nom":  nom,
                        "prix":  prix,
                        "quantite": quantite
                    };

                    let xmlhttp = new XMLHttpRequest();
                    xmlhttp.open("POST", "index.php");                 
                    xmlhttp.send(data);
                });
            }
        });
    });
});
