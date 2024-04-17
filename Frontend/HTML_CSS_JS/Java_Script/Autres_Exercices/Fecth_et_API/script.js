
for(let i = 0; i<160; i+=20){
    fetch(`https://pokeapi.co/api/v2/pokemon/?offset=${i}&limit=20`).then(response => response.json()).then(data => {
        console.log(data.next);
        data.results.forEach(pokemon => {
            fetch(`${pokemon.url}`).then(response => response.json()).then(dataPokemon => {
                console.log(dataPokemon);
                const pokedex = document.querySelector('.pokedex .conteneur');
                const pokemon = document.createElement('div');
    
                pokemon.className = `${dataPokemon.name}`
                pokemon.innerHTML = `
                    <div class="pokemon ${dataPokemon.name}">
                        <h2 class="nom">${dataPokemon.name}</h2>
                        <img src="${dataPokemon.sprites.front_default}" alt="Image ${dataPokemon.name}">
                        <div class="descriptions">
                            <p class="id">${dataPokemon.id}</p>
                            <p class="types"></p>
                        </div>
                    </div>
                `;
                pokedex.appendChild(pokemon);
                
                // console.log(dataPokemon.id);
                // console.log(dataPokemon.name);
                // console.log(dataPokemon.sprites.front_default);
            });
        });
    });
}
// ? Les images ne s'affichent pas dans l'ordre, probleme lier a js:
// ?    - Soit les données ne sont pas reçu dans l'ordre