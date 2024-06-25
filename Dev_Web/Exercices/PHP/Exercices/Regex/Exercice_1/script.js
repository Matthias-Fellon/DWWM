let password = document.getElementById("motDePasse");

password.addEventListener('input', () => {
    let currentMDP = password.value;
    let longueurMDP = document.getElementById("LongueurMDP");
    let minusculeMDP = document.getElementById("MinusculeMDP");
    let majusculeMDP = document.getElementById("MajusculeMDP");
    let caracSpeMDP = document.getElementById("CaracSpeMDP");
    let chiffreMDP = document.getElementById("ChiffreMDP");

    //MDP >= 10 caractères
    if(currentMDP.length >= 10) {
        longueurMDP.style.color = 'green';
    } else {
        longueurMDP.style.color = 'red';
    }

    //Au moins une lettre minuscule
    if(/[a-z]/.test(currentMDP)) {
        minusculeMDP.style.color = 'green';
    } else {
        minusculeMDP.style.color = 'red';
    }

    //Au moins une lettre majuscule
    if(/[A-Z]/.test(currentMDP)) {
        majusculeMDP.style.color = 'green';
    } else {
        majusculeMDP.style.color = 'red';
    }

    if(/\d/.test(currentMDP)) {
        chiffreMDP.style.color = 'green';
    } else {
        chiffreMDP.style.color = 'red';
    }

    //Au moins un caractère spécial
    if(/[!@#$%^&*(),.?":{}|<>]/.test(currentMDP)) {
        caracSpeMDP.style.color = 'green';
    } else {
        caracSpeMDP.style.color = 'red';
    }
});
