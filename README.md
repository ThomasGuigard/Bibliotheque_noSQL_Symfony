bibliotheque
============

A Symfony project created on June 18, 2017, 2:40 pm.

Ce projet prenant en charge la gestion de livres se base sur un framework Symphony intégrant une base de données MongoDB.

Pour pouvoir utiliser MongoDB, il nous faut ajouter des dépendances à composer.json qui ajoutera ensuite le bundle nécessaire à nos besoins après un update.
Il suffit d'update AppKernel.php pour enregistrer le nouveau bundle.
Pour la configuration, le plus simple reste d'activer l'auto_mapping qui va activer MongoDB ODM à travers la plateforme.
Il faut pour cela configuer les fichiers parameters.yml et config.yml dans app/config.

Il ne reste plus qu'à créer les classes nécessaire pour manipuler des objets.
