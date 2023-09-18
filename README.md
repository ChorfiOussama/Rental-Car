# Rental-Car

## Description

Pour assurer la réservation en ligne et pour réduire le temps c'est pour ça que j'ai créé un site Web de réservation du voiture dans le but d'enrichir mes compétence au niveau de programmation Web et aussi pourquoi pas de pouvoir crée encore une fois un site complet de même sorte, le site Web que J'ai créé est attractif, dynamique et interactif, autant pour son administration que pour son utilisation, est alors nécessaire au bon fonctionnement et à la communication interne et externe d'une telle structure.

## Fonctionnalités

-  Recherche de voitures : Les clients peuvent rechercher des voitures disponibles en fonction de critères tels que la marque et la date.

-  Réservation en ligne : Les clients peuvent réserver une voiture en fournissant leurs informations personnelles et les détails de la réservation.

-  Gestion des voitures : Les employés de l'agence peuvent ajouter, modifier et supprimer des voitures, ainsi que gérer les informations relatives aux voitures, telles que la marque, le modèle, l'immatriculation et la disponibilité.

-  Gestion des clients : Les employés de l'agence peuvent gérer les informations des clients, telles que leurs coordonnées et l'historique des réservations.

-  Gestion des réservations : Les employés de l'agence peuvent consulter, modifier et annuler les réservations effectuées par les clients


## Installation

### Prérequis

-   Laravel 10.3.3
-   PHP 8.1
-   Composer
-   MySQL

### Installation

1. Cloner le projet

    ```sh
     git clone https://github.com/ChorfiOussama/Rental-Car.git
     cd Rental-Car
    ```

2. Installer les dépendances

    ```sh
    composer update
    composer install
    npm install
    ```

3. Créer un fichier .env à partir du fichier .env.example

    ```sh
    cp .env.example .env
    ```

4. Générer une clé d'application

    ```sh
    php artisan key:generate
    ```

5. Créer une base de données et configurer le fichier .env

6. Lancer les migrations

    ```sh
    php artisan migrate
    ```

    Vous pouvez également lancer les seeders pour avoir des données de test

    ```sh
    php artisan db:seed
    ```

7. Lancer le serveur

    ```sh
    php artisan serve
    ```

8. Pour se connecter l'administrateur:
   
   - Nom d'utilisateur : admin
   - mot de passe : admin
