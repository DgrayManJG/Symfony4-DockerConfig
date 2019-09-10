# Symfony4-DockerConfig

Pour utiliser le projet sur git 
Faire git clone https://github.com/DgrayManJG/Symfony4-DockerConfig.git

Configurer le fichier docker-compose.yml à votre convenance.
Le plus souvent on va vouloir changer le container_name ainsi que le port.

Pour lancer docker :
> docker-compose up -d

pour l'arreter : 
> docker-compose stop

pour supprimer : 
> docker-compose rm

ensuite il faut mettre à jours le projet avec composer
> composer install

et il faut lancer le webpack pour les assets avec Yarn

pour installer Yarn
> Yarn

Pour lancer le service webpack :
> yarn encore dev --watch

ou 
> yarn encore dev

Vous pouvez maintenant vous rendre sur l'adresse avec le port que vous avez renseigner
Par défaut 
A [localhost:150](http://localhost:150")
