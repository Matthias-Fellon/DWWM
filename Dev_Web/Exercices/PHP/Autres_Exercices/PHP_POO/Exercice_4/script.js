document.addEventListener("DOMContentLoaded", function() {
    const modifyButtons = document.querySelectorAll(".ModifProduit");

    modifyButtons.forEach(button => {
        // TODO: faire un bouton toggle (affiche le form lorsque qu'on clique et désaffiche lorsque l'on re-clique)
        button.addEventListener("click", function() {
            // Récupération des données du produit
            const nom = this.dataset.nom;
            const prix = this.dataset.prix;
            const quantite = this.dataset.quantite;

            // Création du formulaire
            const formHtml = `
                <!-- Formulaire de modification -->
                <form class="formModifProduit" data-nom="${nom}">
                    <label for="nom">Nom: </label><br>
                    <input type="text" name="nom" id="nom" value="${nom}" readonly>
                    
                    <label for="prix">Prix: </label><br>
                    <input type="number" name="prix" id="prix" step="0.01" value="${prix}">
                    
                    <div class="addSuppQuantite">
                    <label for="addSupp">Quantité:</label>
                        <select name="quantite">
                            <option value="ajouter">Ajouter</option>
                            <option value="enlever">Enlever</option>
                        </select>
                        <input type="number" name="quantite" id="quantite" value="${quantite}">
                    </div>

                    <input type="submit" value="Enregistrer">
                </form>
            `;

            // Insérer le formulaire après les informations du produit
            this.parentElement.insertAdjacentHTML('afterend', formHtml);

            // Ajout d'un écouteur d'événement pour la soumission du formulaire
            const editForm = document.querySelector(`form[data-nom='${nom}']`);
            editForm.addEventListener("submit", function(event) {
                event.preventDefault();

                const formData = new FormData(this);
                formData.append('ajax', true);

                fetch("index.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Mise à jour des informations affichées
                        const produitDiv = document.querySelector(`input[data-nom='${nom}']`).parentElement;
                        produitDiv.querySelector("p:nth-child(1)").innerText = "Nom : " + formData.get("nom");
                        produitDiv.querySelector("p:nth-child(2)").innerText = "Prix : " + formData.get("prix");
                        produitDiv.querySelector("p:nth-child(3)").innerText = "Quantité : " + formData.get("stock");
                        
                        // Suppression du formulaire
                        this.remove();
                    } else {
                        alert("Erreur lors de la mise à jour du produit: " + JSON.stringify(data.errors));
                    }
                });
            });
        });
    });
});