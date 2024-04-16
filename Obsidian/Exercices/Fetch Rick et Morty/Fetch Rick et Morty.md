L'objectif de l'exercice est d'utilisé un fetch pour afficher l'intégralité des personnages, des lieux et des épisodes présents dans l'API Rick et Morty [https://rickandmortyapi.com/documentation](https://rickandmortyapi.com/documentation "https://rickandmortyapi.com/documentation") Au niveau de la documentation, ce qui vous intéresse, c'est la partie REST. On travaille ici avec une API REST qui vous donnera les informations sous un forma JSON. Vous allez créer un site rapide (ne vous attardez pas au niveau du design). Sur ce site, il aura une Nav Bar avec 3 sections différentes :

- Les personnages
- Les lieux
- Les épisodes

Ces 3 sections de sites seront 3 pages HTML différentes. Vous aurez donc :

- Une page d'accueil (index.html)
- Une page episodes (episodes.html)
- Une page lieux (lieux.html)
- Une page personnages (personnages.html)

La difficulté de l'exercice sera dans l'exploitation des datas. Toutes les sections de l'API sont découpés en page de 20 éléments. Il va fonc falloir récupérer le nombre de page au total, utiliser la bonne boucle qui vous permettra de parcourir les pages et d'afficher tous les éléments sous forme de card. Pour la page personnage, il faudra une carte pour chaque personnage avec :

- le nom
- Une image

Pour la page lieux, il faudra mettre dans un tableau :

- le nom
- le type de lieu

Pour la page episode, il faudra indiquer dans un tableau :

- le numéro de l'épisode
- l'intitulé de l'épisode
- La date de sortie


documentation : https://rickandmortyapi.com/documentation/