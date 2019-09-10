# Symfony4 avec config Docker

Pour utiliser le projet sur git  
> git clone https://github.com/DgrayManJG/Symfony4-DockerConfig.git

Configurer le fichier docker-compose.yml à votre convenance.
Le plus souvent, on va vouloir changer le container_name ainsi que le port.

Pour lancer docker :
> docker-compose up -d

Pour l'arrêter : 
> docker-compose stop

Pour supprimer : 
> docker-compose rm

Ensuite, il faut mettre à jour le projet avec composer
> composer install

Et il faut lancer le webpack pour les assets avec Yarn

Pour installer Yarn
> Yarn

Pour lancer le service webpack :
> yarn encore dev --watch

ou 
> yarn encore dev

Vous pouvez maintenant vous rendre sur l'adresse avec le port que vous avez renseigner.
Par défaut 
A [localhost:81](http://localhost:150")
