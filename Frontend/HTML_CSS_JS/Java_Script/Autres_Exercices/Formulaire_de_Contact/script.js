const formulaire = document.querySelector('.formulaire');

formulaire.addEventListener('submit', (event) => {
    event.preventDefault();
    const inputs = document.querySelectorAll('.userEntry');
    let donneesUser = {};

    inputs.forEach(input => {
       donneesUser[input.id] = input.value; 
    });
    console.log(donneesUser);
})