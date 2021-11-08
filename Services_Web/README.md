# Services Web
En plus des fonctionnalités directement accessibles depuis un navigateur, l’application devra exposer un ensemble de services web afin que ses fonctionnalités métiers soient accessibles à d’autres applications. De ce fait, il vous est demandé de :

Créer un service web SOAP permettant de :  lister, ajouter, supprimer ou modifier des utilisateurs. L’accès à ce service requiert un jeton d’authentification qu’un administrateur devra au préalable générer depuis la page d’administration du site  D’authentifier un utilisateur suivant un login et un mot de passe fourni Créer un service web REST permettant de :  Récupérer la liste de tous les articles. Cette liste devra être retournée au format XML ou JSON selon le choix de l’utilisateur.  récupérer la liste des articles regroupés en catégories (format XML ou JSON au choix)  récupérer la liste des articles appartenant à une catégorie fournie par l’utilisateur (format XML ou JSON au choix)

## API REST + ServiceSoap

    npm run start:server pour démarrer l'api reste sur le port 9000
    java ServerSoap pour lancer le web service sur le port 8787
