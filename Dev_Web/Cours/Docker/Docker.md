# Commandes 
#### Creation des fichiers de démarrage de docker
```d
docker init
```
#### Créer et démarre un conteneur
```d
docker compose up
```
##### Options  
* -d :  Detached mode: Run containers in the background
#### Met automatiquement à jour le conteneur lorsque que des modifications sont faites
```d
docker compose watch
```
#### Fabrique une image a partir d'un fichier Docker (Dockerfille)
```d
docker build .
```
##### Options
*  -t : Name and optionally a tag in the `name:tag` format|
#### Créer et démarre un conteneur a partir d'une image
```d
docker run Nom_Dossier-nginx
```
##### Options
* -d : Run container in background and print container ID
* -p : Publish a container's port(s) to the host
#### Lister les conteneurs
```d
docker ps
```
##### Options
* -a : Show all containers (default shows just running)
#### Lister les images
```d
docker image ls
```
##### Commande alternatif
```d
docker images
```
#### Supprimer un ou plusieurs conteneurs
```d
docker rm CONTAINER_ID
```
##### Pas besoin de tous marquer les chiffres seulement les premier suffise
#### Supprimer une ou plusieurs images
```d
docker rmi IMAGE_ID
```

# Cas concret
# Plus d'informations
#### https://docs.docker.com/reference/cli/docker/