const pokemon = document.querySelector(".pokemon");
const creerDiv = document.createElement('div');
const creerText = document.createElement('p');
const creerImage = document.createElement('img');

creerDiv.className = "conteneur";
creerDiv.appendChild(creerText);
creerDiv.appendChild(creerImage);
creerDiv.appendChild(creerText);
pokemon.appendChild(creerDiv);

fetch("https://pokeapi.co/api/v2/pokemon/").then(response => response.json()).then(data => {
    // console.log(data);
    data.results.forEach(pokemon => {
        fetch(`${pokemon.url}`).then(response => response.json()).then(dataPokemon => {
            // console.log(dataPokemon);
            
            console.log(dataPokemon.id);
            console.log(dataPokemon.name);
            console.log(dataPokemon.sprites.front_default);
            
        });
    });
});