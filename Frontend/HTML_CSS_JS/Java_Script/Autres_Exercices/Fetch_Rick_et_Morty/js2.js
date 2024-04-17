const body = document.querySelector('body');
const categorie = document.querySelectorAll('.categorie');

categorie.forEach(element => {
    element.addEventListener('click', () => {
        let pages;
        switch(true) {
            case(element.id=='personnages'):
                // location.href = "personnages.html";
                fetch("https://rickandmortyapi.com/api/character?page=1")
                .then(response => response.json())
                .then(data => {
                    pages = data.info.pages;
                })

                setTimeout(() => {
                    for (let index = 1; index <= pages; index++) {
                        fetch('https://rickandmortyapi.com/api/character?page=' + index)
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
                break;

            case(element.id=='lieux'):
                // location.href = "lieux.html";
                fetch("https://rickandmortyapi.com/api/location?page=1")
                .then(response => response.json())
                .then(data => {
                    pages = data.info.pages;
                })

                setTimeout(() => {
                    for (let index = 1; index <= pages; index++) {
                        fetch('https://rickandmortyapi.com/api/location?page=' + index)
                        .then(response => response.json())
                        .then(data => {
                            data.results.forEach(element => {
                                console.log(element.name, element.type);

                                const card = document.createElement('div');
                                card.classList.add = "card";
                                body.appendChild(card);

                                const nomLieu = document.createElement('p');
                                nomLieu.textContent = element.name;
                                card.appendChild(nomLieu);

                                const typeLieu = document.createElement('p');
                                typeLieu.textContent = element.type;
                                card.appendChild(typeLieu);
                            });
                        })
                    }
                }, 2000)
                break;
            
            case(element.id=='episodes'):
                // location.href = "episodes.html";
                fetch("https://rickandmortyapi.com/api/episode?page=1")
                .then(response => response.json())
                .then(data => {
                    pages = data.info.pages;
                })

                setTimeout(() => {
                    for (let index = 1; index <= pages; index++) {
                        fetch('https://rickandmortyapi.com/api/episode?page=' + index)
                        .then(response => response.json())
                        .then(data => {
                            data.results.forEach(element => {
                                console.log(element.id, element.name, element.air_date);

                                const card = document.createElement('div');
                                card.classList.add = "card";
                                body.appendChild(card);

                                const numEpisode = document.createElement('p');
                                numEpisode.textContent = element.id;
                                card.appendChild(numEpisode);

                                const nomEpisode = document.createElement('p');
                                nomEpisode.textContent = element.name;
                                card.appendChild(nomEpisode);

                                const dateSortieEpisode = document.createElement('p');
                                dateSortieEpisode.textContent = element.air_date;
                                card.appendChild(dateSortieEpisode);
                            });
                        })
                    }
                }, 2000)
                break;
            
            default:
                console.log('Marche po !');
                break;
        }
    });
});