fetch('https://rickandmortyapi.com/api/episode')
.then(response => response.json())
.then(data => {
    console.log(data);
    let pages = data.info.pages;
    const table = document.createElement('table')
    const content = document.querySelector('.content')
    content.appendChild(table)

    const thead = document.createElement('thead')
    table.appendChild(thead)

    const tr = document.createElement('tr')
    thead.appendChild(tr)

    const th1 = document.createElement('th')
    th1.textContent = "Numéro de l'épisode"
    tr.appendChild(th1)

    const th2 = document.createElement('th')
    th2.textContent = "Nom de l'épisode"
    tr.appendChild(th2)

    const th3 = document.createElement('th')
    th3.textContent = "date de sortie"
    tr.appendChild(th3)

    const tbody = document.createElement('tbody')
    table.appendChild(tbody)

    for (let index = 1; index <= pages; index++) {
        fetch(`https://rickandmortyapi.com/api/episode?page=${index}`)
        .then(response => response.json())
        .then(data2 => {
            data2.results.forEach(element => {
                console.log(element);
        
                const trLieu = document.createElement('tr')
                tbody.appendChild(trLieu)
        
                const tdId = document.createElement('td')
                tdId.textContent = element.episode
                trLieu.appendChild(tdId)
                const tdName = document.createElement('td')
                tdName.textContent = element.name
                trLieu.appendChild(tdName)
                const tdDate = document.createElement('td')
                tdDate.textContent = element.air_date                
                trLieu.appendChild(tdDate)
                
        
            })

        } )
    }

})


