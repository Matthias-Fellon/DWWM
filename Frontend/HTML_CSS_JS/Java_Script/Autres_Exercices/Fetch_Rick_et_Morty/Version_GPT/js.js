const categorie = document.querySelectorAll('.categorie');

categorie.forEach(element => {
    element.addEventListener('click', () => {
        let url;
        switch(true) {
            case(element.id=='personnages'):
                url = "character.html";
                break;
            case(element.id=='lieux'):
                url = "location.html";
                break;
            case(element.id=='episodes'):
                url = "episode.html";
                break;
            default:
                console.log('Marche po !');
                break;
        }
        location.href = url;
    });
});

const fetchData = (apiURL, dataKeys, displayType) => {
    fetch(apiURL)
    .then(response => response.json())
    .then(data => {
        const pages = data.info.pages;
        setTimeout(() => {
            for (let i = 1; i <= pages; i++) {
                fetch(apiURL + i)
                .then(response => response.json())
                .then(data => {
                    data.results.forEach(result => {
                        const resultObj = Object.fromEntries(dataKeys.map(key => [key, result[key]]));

                        const displayElement = document.createElement(displayType === "card" ? "div" : "tr");
                        displayElement.className = displayType === "card" ? "card" : null;
                        document.querySelector('.conteneur').appendChild(displayElement);

                        dataKeys.forEach(key => {
                            const element = document.createElement(displayType === "card" ? (key === "name" ? "p" : "img") : "td");
                            if (key === "name") element.textContent = resultObj[key];
                            if (key === "image") element.src = resultObj[key];
                            if (key === "id" || key === "type" || key === "air_date") element.textContent = resultObj[key];
                            displayElement.appendChild(element);
                        });
                    });
                })
                .catch(error => console.error('Erreur lors de la récupération des données :', error));
            }
        }, 500)
    })
    .catch(error => console.error('Erreur lors de la récupération des données :', error));
};

const currentPage = window.location.pathname.split("/").pop(); 
let dataKeys = [];
let displayType = "";

switch(currentPage) {
    case 'index.html':
        console.log("Page d'accueil");
        break;
    case 'personnage.html':
        dataKeys = ["name", "image"];
        displayType = "card";
        break;
    case 'lieu.html':
        dataKeys = ["name", "type"];
        displayType = "tab";
        break;
    case 'episode.html':
        dataKeys = ["id", "name", "air_date"];
        displayType = "tab";
        break;
    default:
        console.log('Page non reconnue');
        break;
}

if (dataKeys.length && displayType) {
    fetchData(`https://rickandmortyapi.com/api/${currentPage.split('.')[0]}?page=`, dataKeys, displayType);
}