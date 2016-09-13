<?php

return [

    /**
     *
     * Welcome page.
     *
     */
    'welcome' => [
        'name' => 'My application',
        'version' => 'V 1.0',
        'title' => 'Welcome to the Installer !',
        'sub-title' => 'Your server have all requirements and permissions for this application. Before we launch, we need some informations about your database :',
        'item1' => 'Database name',
        'item2' => 'Database login',
        'item3' => 'Database password',
        'item4' => 'Database host',
        'message' => 'We\'ll use these informations to update the environment file',
        'button' => 'Let\'s go !',
    ],

    /**
     *
     * Database page.
     *
     */
    'database' => [
        'title' => 'Database setting',
        'sub-title' => 'If you dont know how to fill this form contact your hoster',
        'dbname-label' => 'Database name (where you want your application to be)',
        'username-label' => 'Username (Your database login)',
        'password-label' => 'Password (Your database password)',
        'host-label' => 'Host name (should be "localhost", if it doesn\'t work ask your hoster)',
        'button' => 'Send',
        'wait' => 'A bit of patience...',
    ],

    /**
     *
     * Database error page.
     *
     */
    'database-error' => [
        'title' => 'Database connection error',
        'sub-title' => 'We cant connect to database with your settings :',
        'item1' => 'Are you sure of your username and password ?',
        'item2' => 'Are you sure of your host name ?',
        'item3' => 'Are you sure that your database server is working ?',
        'message' => 'If your are not very sure to understand all these terms you should contact your hoster.',
        'button' => 'Try again !',
    ],

    /**
     *
     * Requirement error page.
     *
     */
    'requirement-error' => [
        'title' => 'There is a requirement error',
        'requirement' => 'We cant install this application because this PHP requirement is missing : ',
        'php-version' => 'PHP version must be at least 5.5.9 but your version is ',
        'message' => 'You must fix this error to continue the installation !'
    ],

    /**
     *
     * Permission error page.
     *
     */
    'permission-error' => [
        'title' => 'There is a permission error',
        'sub-title' => 'We cant install this application because this folder is not writable : ',
        'message' => 'You must fix this error to continue the installation !'
    ],

    /**
     *
     * Register page.
     *
     */
    'register' => [
        'title' => 'Administrator creation',
        'sub-title' => 'Now you must enter informations to create administrator',
        'base-label' => 'Your ',
        'message' => 'You\'ll need your password to login, so keep it safe !',
        'button' => 'Send',
    ],

    /**
     *
     * Register fields for labels.
     *
     */
    'register-fields' => [
        'name' => 'name',
        'email' => 'email',
        'password' => 'password',
    ],

    /**
     *
     * End page.
     *
     */
    'end' => [
        'title' => 'Successfull installation !',
        'sub-title' => 'The application and now installed and you can use it',
        'login' => 'Your login : ',
        'password' => 'Your password :',
        'button' => 'Login',
    ],

];
