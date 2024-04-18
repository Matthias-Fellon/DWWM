const nom = document.querySelector(".inputName");
const prenom = document.querySelector(".inputFirstName");
const number = document.querySelector(".inputNumber");
const message = document.querySelector(".inputMessage");

const formulaire = document.querySelector(".formulaire");
formulaire.addEventListener("submit", (event) => {
  event.preventDefault();

  valueNom = nom.value;
  valuePrenom = prenom.value;
  valueNumber = number.value;
  valueMessage = message.value;

  let objectToSend = {
    nom: valueNom,
    prenom: valuePrenom,
    number: valueNumber,
    message: valueMessage,
  };
  console.log(objectToSend);

  // URL de l'API MockAPI avec l'endpoint spécifique
  const url = "https://6604de512ca9478ea17ea532.mockapi.io/soey/api/afci";

  // Configuration de la requête fetch
  const requestOptions = {
    method: "POST", // Méthode HTTP à utiliser (dans ce cas, POST)
    headers: {
      "Content-Type": "application/json", // Type de contenu des données à envoyer
    },
    body: JSON.stringify(objectToSend), // Conversion des données à envoyer en format JSON
  };

  // Envoi de la requête fetch
  fetch(url, requestOptions)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Erreur lors de la requête fetch");
      }
      return response.json(); // Récupération des données JSON renvoyées par l'API
    })
    .then((data) => {
      console.log("Réponse de l'API :", data);
      // Faites quelque chose avec les données renvoyées par l'API si nécessaire
    })
    .catch((error) => {
      console.error("Erreur :", error);
    });
});
