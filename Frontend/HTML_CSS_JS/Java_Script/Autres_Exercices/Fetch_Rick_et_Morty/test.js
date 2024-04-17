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
    });
});

function fetchData(apiURL, donneesVoulus, typeAffichage) {
    const tab = document.createElement('table');
    tab.className = "tab";
    const tBody = document.createElement('tbody');
    const tHead = document.createElement('thead');
    
    if(typeAffichage == "tab") {
        document.querySelector('.conteneur').appendChild(tab);
        tab.appendChild(tHead);
        tab.appendChild(tBody);
        
        const trHead = document.createElement('tr');
        tHead.appendChild(trHead);
        
        donneesVoulus.forEach(donnee => {
            const th = document.createElement('th');
            th.scope = "col";
            th.textContent = donnee;
            trHead.appendChild(th);
        });      
    }

    fetch(apiURL)
    .then(response => response.json())
    .then(data => {
        const pages = data.info.pages;
        setTimeout(() => { // ! Pourquoi avoir mis un setTimeout ? (regerde le principe du setTimeout)
            for (let i = 1; i <= pages; i++) {
                fetch(apiURL + i)
                .then(response => response.json())
                .then(data => {
                    data.results.forEach(result => {
                        let resultObj = {};
                        donneesVoulus.forEach(donnee => {
                            let temp = {};
                            temp[donnee] = result[donnee];
                            Object.assign(resultObj, temp);
                        });
                        
                        switch(typeAffichage) {
                            case "card":
                                const card = document.createElement('div');
                                card.className = "card";
                                document.querySelector('.conteneur').appendChild(card);

                                donneesVoulus.forEach(donnee => {
                                    switch(donnee) {
                                        case "name":
                                            const nom = document.createElement('p');
                                            nom.textContent = resultObj.name;
                                            card.appendChild(nom);
                                            break;

                                        case "image":
                                            const image = document.createElement('img');
                                            image.src = resultObj.image;
                                            image.className = "image";
                                            card.appendChild(image);
                                            break;
                                    }
                                });
                                break;
                                
                            case "tab":
                                const trBody = document.createElement('tr');
                                tBody.appendChild(trBody);

                                donneesVoulus.forEach(donnee => {
                                    switch(donnee) {
                                        case "id":
                                            const id = document.createElement('td');
                                            id.textContent = resultObj.id;
                                            trBody.appendChild(id);
                                            break;

                                        case "name":
                                            const nom = document.createElement('td');
                                            nom.textContent = resultObj.name;
                                            trBody.appendChild(nom);
                                            break;

                                        case "type":
                                            const type = document.createElement('td');
                                            type.textContent = resultObj.type;
                                            trBody.appendChild(type);
                                            break;

                                        case "air_date":
                                            const airDate = document.createElement('td');
                                            airDate.textContent = resultObj.air_date;
                                            trBody.appendChild(airDate);
                                            break;
                                    }
                                });
                                break;
                        }
                        console.log(resultObj);
                    });
                })
                .catch(error => {
                    console.error('Erreur lors de la récupération des données :', error);
                });
            }
        }, 500)
    })
    .catch(error => {
        console.error('Erreur lors de la récupération des données :', error);
    });
}

const currentPage = window.location.pathname.split("/").pop(); // Nom du fichier HTML actuel

// Appeler fetchData avec le bon URL en fonction de la page actuelle
let donneesVoulus =[];
switch(currentPage) {
    case 'index.html':
        console.log("Page d'accueil");
        break;
        
    case 'personnages.html':
        donneesVoulus = ["name", "image"];
        fetchData("https://rickandmortyapi.com/api/character?page=", donneesVoulus, "card");
        break;

    case 'lieux.html':
        donneesVoulus = ["name", "type"];
        fetchData("https://rickandmortyapi.com/api/location?page=", donneesVoulus, "tab");
        break;

    case 'episodes.html':
        donneesVoulus = ["id", "name", "air_date"];
        fetchData("https://rickandmortyapi.com/api/episode?page=", donneesVoulus, "tab");
        break;

    default:
        console.log('Page non reconnue');
        break;
}