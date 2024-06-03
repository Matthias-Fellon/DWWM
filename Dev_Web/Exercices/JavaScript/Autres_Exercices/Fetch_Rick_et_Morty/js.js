const body = document.querySelector('body');
const categorie = document.querySelectorAll('.categorie');

categorie.forEach(element => {
    element.addEventListener('click', () => {
        let url;
        switch(true) {
            case(element.id=='personnages'):
                url = "personnages.html";
                break;
            case(element.id=='lieux'):
                url = "lieux.html";
                break;
            case(element.id=='episodes'):
                url = "episodes.html";
                break;
            default:
                console.log('Marche po !');
                break;
        }
        location.href = url;
        chercheDonnees();
    });
});

function fetchData(cleAPI) {
    fetch(cleAPI)
    .then(response => response.json())
    .then(data => {
        // Faites quelque chose avec les données reçues
        const pages = data.info.pages;
        setTimeout(() => {
            for (let i = 1; i <= pages; i++) {
                fetch(cleAPI + i)
                .then(response => response.json())
                .then(data => {
                    data.results.forEach(element => {
                        console.log(element.name, element.image);

                        const card = document.createElement('div');
                        card.classList.add = "card";
                        body.appendChild(card);

                        const nomPersonnage = document.createElement('p');
                        nomPersonnage.textContent = element.name;
                        card.appendChild(nomPersonnage);

                        const imagePersonnage = document.createElement('img');
                        imagePersonnage.src = element.image;
                        card.appendChild(imagePersonnage);
                    });
                })
            }
        }, 2000)
    })
    .catch(error => {
        console.error('Erreur lors de la récupération des données :', error);
    });
}

function chercheDonnees() {
    // Obtenez le nom du fichier HTML actuel
    const currentPage = window.location.pathname.split("/").pop();
    
    // Appeler fetchData avec le bon URL en fonction de la page actuelle
    let donneesVoulus = [];
    switch(currentPage) {
        case 'personnages.html':
            fetchData("https://rickandmortyapi.com/api/character?page=");
            break;
        case 'lieux.html':
            fetchData("https://rickandmortyapi.com/api/location?page=");
            break;
        case 'episodes.html':
            fetchData("https://rickandmortyapi.com/api/episode?page=");
            break;
        default:
            console.log('Page non reconnue');
            break;
    }
}
