let pages;

fetch('https://rickandmortyapi.com/api/character?page=1')
.then(response => response.json())
.then(data => {
    pages = data.info.pages

    for (let index = 1; index <= pages; index++) {
        fetch(`https://rickandmortyapi.com/api/character?page=${index}`)
        .then(response => response.json())
        .then(data => {
            data.results.forEach(element => {
                const createDiv = document.createElement('div')
                const content = document.querySelector('.content')
                content.appendChild(createDiv)
         
                const paragraphe = document.createElement('p')
                paragraphe.textContent = element.name
                createDiv.appendChild(paragraphe)
        
                const image = document.createElement('img')
                image.src = element.image
                createDiv.appendChild(image)
                // Creer une card
                // avec les bonnes infos
                // Rattacher à la section
            })
        })
    
        
    }


    


})    

