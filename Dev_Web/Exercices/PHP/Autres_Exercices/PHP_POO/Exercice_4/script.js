document.querySelectorAll('.ModifProduit').forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        document.getElementById('formulaireModification').style.display = 'block';
        document.getElementById('nom').value = this.getAttribute('data-nom');
        document.getElementById('prix').value = this.getAttribute('data-prix');
        document.getElementById('quantite').value = this.getAttribute('data-quantite');
    });
});