docker init
docker compose up
docker compose up -d
docker compose watch
docker build -t Nom_Dossier-nginx .
docker run -d -p Numero_Port(Ex : 8080:80) Nom_Dossier-nginx
docker ps -a
docker ps
docker image ls
docker images

docker rm CONTAINER_ID (pas besoin de tous marquer les chiffres seulement les premier suffise)
docker rmi IMAGE_ID