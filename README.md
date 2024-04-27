# Decouvert - Laravel - Livewire - Tailwind CSS

## Petite Presentation 🤔

<video controls src="public/0427.mp4" title="Petite Presentation du projet"></video>

## 1- Pourquoi un tel projet ?

Ce projet Laravel est conçu pour aider à pratiquer et à apprendre l'utilisation de Livewire en intégrant plusieurs mini-projets. Chaque mini-projet démontre une fonctionnalité spécifique et utilise Livewire pour interactivité dynamique.

## 2- Mini-projets intégrés

1. Compteur :

    Un simple compteur qui peut être incrémenté ou décrémenté.

2. Liste des tâches ou TodoListe :

    Une liste de tâches où vous pouvez ajouter, supprimer et marquer des tâches.

3. Calculatrice :

    Une calculatrice de base qui effectue les opérations d'addition, soustraction, multiplication et division et le modulo.

4. Recherche instantanée de produit :

    Une fonction de recherche instantanée qui affiche les résultats au fur et à mesure de la saisie.

5. Descente en cascade :

    Une fonctionnalité de sélection en cascade où le choix d'une option dans un menu déroulant met à jour dynamiquement les options disponibles dans le menu déroulant suivant.

6. Chargement d'image :

    Un formulaire permettant de télécharger une image avec une prévisualisation instantanée.

7. Enregistrement avec validation et passage de formulaire à formulaire :

    Un formulaire d'enregistrement avec validation côté serveur qui affiche les erreurs et permet de passer d'un formulaire à un autre.

## Comment faire Installation

-   NB: Ce projet utiliser la version 10 de LARAVEL et version 3.4.11 de LIVEWIRE

1.  `Clonez ce dépôt sur votre machine locale` :

        git clone https://github.com/sokevinjonas/decouverte-livewire.git

2.  `Accédez au répertoire du projet` :

        cd decouverte-livewire

3.  `Installez les dépendances via Composer` :

        composer install

4.  `Copiez le fichier .env.example et renommez-le en .env, puis générez une clé d'application` :

        cp .env.example .env

        php artisan key:generate

5.  `Exécutez les migrations pour créer les tables de base de données et executer les factories`:

        php artisan migrate --seed

6.  `Lancer le serveur ` :

        php artisan serve

7.  Installez les dépendances JavaScript via npm :

        npm install
        npm run dev

# Contribution

Toute contribution à l'amélioration de ce projet est la bienvenue ! N'hésitez pas à ouvrir une pull request.

## Auteurs

SO JONAS KEVIN GNINGNABE
