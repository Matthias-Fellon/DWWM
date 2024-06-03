fetch('https://rickandmortyapi.com/api/location')
.then(response => response.json())
.then(data => {
    let pages = data.info.pages;
    const table = document.createElement('table')
    const content = document.querySelector('.content')
    content.appendChild(table)

    const thead = document.createElement('thead')
    table.appendChild(thead)

    const tr = document.createElement('tr')
    thead.appendChild(tr)

    const th1 = document.createElement('th')
    th1.textContent = "Nom du lieu"
    tr.appendChild(th1)

    const th2 = document.createElement('th')
    th2.textContent = "Type de lieu"
    tr.appendChild(th2)

    const tbody = document.createElement('tbody')
    table.appendChild(tbody)

    for (let index = 1; index <= pages; index++) {
        fetch(`https://rickandmortyapi.com/api/location?page=${index}`)
        .then(response => response.json())
        .then(data2 => {
            data2.results.forEach(element => {
                console.log(element.name, element.type  );
        
                const trLieu = document.createElement('tr')
                tbody.appendChild(trLieu)
        
                const tdName = document.createElement('td')
                tdName.textContent = element.name
                trLieu.appendChild(tdName)
                const tdType = document.createElement('td')
                tdType.textContent = element.type
                trLieu.appendChild(tdType)
                
        
            })

        } )
    }

})


