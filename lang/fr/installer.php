<?php

return [

    /**
     *
     * Welcome page.
     *
     */
    'welcome' => [
        'name' => 'Mon application',
        'version' => 'V 1.0',
        'title' => 'Bienvenu dans l\'installeur !',
        'sub-title' => 'Votre serveur dispose de tout le nécessaire pour installer cette application. Avant de procéder à l\'installation nous avons besoin de renseignements concernant la base de données :',
        'item1' => 'Nom de la base de données',
        'item2' => 'Identifiant pour la base de données',
        'item3' => 'Mot de passe pour la base de données',
        'item4' => 'Adresse de la base de données',
        'message' => 'Nous utiliserons ces informations pour mettre à jour le fichier d\'environnement.',
        'button' => 'C\'est parti !',
    ],

    /**
     *
     * Database page.
     *
     */
    'database' => [
        'title' => 'Réglages de la base de données',
        'sub-title' => 'Si vous ne savez pas remplir ce formulaire contactez votre hébergeur',
        'dbname-label' => 'Nom de la base de données (là où vous voulez placer votre application)',
        'username-label' => 'Identifiant (pour vous connecter à la base de données)',
        'password-label' => 'Mot de passe',
        'host-label' => 'Adresse (normalement "localhost", sinon contactez votre hébergeur)',
        'button' => 'Envoyer',
        'wait' => 'Un peu de patience...',
    ],

    /**
     *
     * Database error page.
     *
     */
    'database-error' => [
        'title' => 'Erreur de connexion à la base de données',
        'sub-title' => 'Nous n\'arrivons pas à contacter la base de données avec vos réglages :',
        'item1' => 'Etes-vous sûr de votre identifiant et de votre mot de passe ?',
        'item2' => 'Etes-vous sûr de l\'adresse de la base ?',
        'item3' => 'Etes-vous sûr que la base de données fonctionne ?',
        'message' => 'Si vous n\'êtes pas trop sûr de comprendre tous ces termes contactez votre hébergeur.',
        'button' => 'On essaye encore !',
    ],

    /**
     *
     * Requirement error page.
     *
     */
    'requirement-error' => [
        'title' => 'Il y a un problème au niveau des prérequis',
        'requirement' => 'Nous ne pouvons pas installer l\'application parce que ce composant de PHP n\'est pas présent : ',
        'php-version' => 'La version de PHP doit être au moins la 5.5.9 mais votre version est la ',
        'message' => 'Vous devez réparer ce problème pour pouvoir poursuivre l\'installation !'
    ],

    /**
     *
     * Permission error page.
     *
     */
    'permission-error' => [
        'title' => 'Il y a un problème de droits d\'écriture dans un dossier',
        'sub-title' => 'Nous ne pouvons pas installer l\'application parce que ce dossier n\'a pas les droits d\'écriture : ',
        'message' => 'Vous devez réparer ce problème pour pouvoir poursuivre l\'installation !'
    ],

    /**
     *
     * Register page.
     *
     */
    'register' => [
        'title' => 'Creation de l\'administrateur',
        'sub-title' => 'Vous devez entrer ces informations pour la création de l\'administrateur',
        'base-label' => 'Votre ',
        'message' => 'Vous aurez besoin de votre mot de passe pour vous connecter, alors conservez-le précieusement !',
        'button' => 'Envoyer',
    ],

    /**
     *
     * Register fields for labels.
     *
     */
    'register-fields' => [
        'name' => 'nom',
        'email' => 'email',
        'password' => 'mot de passe',
    ],

    /**
     *
     * End page.
     *
     */
    'end' => [
        'title' => 'Installation réussie !',
        'button' => 'Login',
    ],

];
