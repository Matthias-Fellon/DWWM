# 1 - Installer Composer
#### Aller sur le site suivant : https://getcomposer.org
#### Aller dans l'onglet "Download"
#### Dans l'onglet "Windows Installer", cliquer sur le lien " [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe "Click here to download Composer-Setup installer for Windows")"

#### Installer le setup Composer

# 2 - Installer Scoop
#### Ouvrir le powershell en mode administrateur.
#### Exécuter cette commande : "
```powershell
Set-ExecutionPolicy RemoteSigned -Scope CurrentUser
```
#### Quitter powershell
#### Ouvrir le power sans être en mode administrateur
#### Exécuter cette commande : ```
```powershell
irm get.scoop.sh | iex
```
# 3 - Installer Symfony
#### Site Symfony : https://symfony.com/download
#### Exécuter la commande suivante

```powershell
scoop install symfony-cli
```

# 4 - Créer un projet Symfony
#### Ouvrir le cmd à l'endroit ou le projet sera créer et exécuter cette commande 
```Command Line
symfony new --webapp my_project
```
#### Pour lancer un serveur Symfony, dans le terminal, exécuter la commande 
```commande line
symfony server:start
```

# 5 - Exécuter un projet Symfony provenant d'un git
#### Se positionner a la racine du projet et, dans un cmd, exécuter la commande 
```commande line 
composer install
```
#### Lancer ensuite le server Symfony avec la commande 
```commande line
symfony server:start
```

# 6 - Aides vidéos pour créer un git Symfony
 #### https://www.youtube.com/watch?v=0B2HVZoQl00
 #### https://www.youtube.com/watch?v=HLe3hF0i6fo