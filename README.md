# Vulnérabilités d'un site web

# Contexte et mission

On vous confie ce nouvel audit du code source d'une application de moteur de blog. Il vous est donc demandé de lire le code source fourni à la recherche des vulnérabilités présentes.

# Code source

L'application est développée principalement en PHP pour la gestion des requêtes web, en SQL pour la persistance des données et en langage C pour l'implémentation des primitives cryptographiques.

Le code source complet est fourni dans le répertoire `www` de ce dépôt. Les fichiers sont organisés en sous-répertoires comme suit :

- `classes` contient le code `PHP` orienté objet, réparti en quatre _namespaces_ ;
- `Dal` (_Database Access Layer_) pour les accès à la base de donnée ;
- `Model` pour le code métier et la description des objets ;
- `Utils` pour les classes fournissant des services divers ;
- `View` pour la construction des pages web ;
- `html` contient le code php disponible au travers du Web, c'est ici que pointe de _DocumentRoot_ de l'application. Deux répertoires (`posts` et `users`) permettent d'organiser les services disponibles aux utilisateurs ;
- `mysql` contient les scripts de création de la base de donnée.

Le fichier `vernam.c` disponible à la racine du projet doit être compilé pour fournir un exécutable `vernam`.

## Audit

Vous devez décrire toutes les vulnérabilités présentes dans cette application en l'état en précisant notamment les informations suivantes :

- fichiers et lignes de code concernés ;
- indications sur la manière de l’exploiter ;
- conséquences d’une exploitation ;
- indications sur la manière de la corriger.
