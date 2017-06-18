Bibliotheque
============

Projet Symfony 3 avec base de données NoSQL

Ce projet prenant en charge la gestion de livres se base sur un framework Symphony intégrant une base de données MongoDB.
Il permet d'ajouter, supprimer, d'emprunter des livres en gardant en mémoire un email, un nom, une date.
Les livres ont leur propres pages.
Appel en ajax d'un template pour le faire apparaitre sous la forme d'une popup afin d'emprunter un livre

Documents : 
  Livre : 
    Titre
    Auteur
    ISBN
    Date d'achat
    Etat
    Thematique
    Pret
  
  Pret :
    Livre
    Date emprunt
    Nom personne
    Mail personne

Le moteur de template Twig a été utilisé afin d'obtenir un rendu des pages propre

Cette application necessite bien sur  MongoDB, un serveur apache d'installé et eventuellement RoboMongo afin de gérer plus facilement les données.

Pour pouvoir utiliser MongoDB sur apache il est nécessaire de rajouter l'extension php correspondante à sa version sur : 
http://pecl.php.net/package/mongo


Pour pouvoir utiliser MongoDB sous Symfony, il nous faut ajouter des dépendances à composer.json qui ajoutera ensuite le bundle nécessaire à nos besoins après un update.
Plus d'informations ici : 
http://symfony.com/doc/current/bundles/DoctrineMongoDBBundle/index.html


Ajoutons un peu de données dans la base via celles présentes ici : 
http://piratepad.net/bilbio-sym-nosql


