## Laravel Installer

This repository is the Laravel 5.3 version of [this one](https://github.com/bestmomo/laravel-installer).

### Features

  - point base url to installator route
  - check PHP version
  - check folders permissions
  - check server requirements
  - allow application publication
  - get the database settings with a form
  - migrate the database
  - seed the database (if needed)
  - optionaly get basic informations (set in config) for administrator creation with a form
  - allow saving complementary informations fo administrator (for example roles)
  - set an unique security key for application
  - remove service provider reference in config to delete the installation stuff

### Installation

Add Installer to your composer.json file to require it :
```
    require : {
        ...
        "bestmomo/laravel-installer": "1.0.*"
    }
```

Update Composer :
```
    composer update
```

The next required step is to add the service provider to config/app.php :
```
    Bestmomo\Installer\InstallerServiceProvider::class,
```

### Publish

The last required step is to publish views, translations and configuration in your application with :
```
    php artisan vendor:publish --tag=laravel-installer
```

### Configuration

## Views

View are in `resources/views/vendor/installer`, you can customize them as you want.

## Translations

Translations are in `resources/lang/*` in `installer.php` file. You can customize them as you want and add other languages (default are only `en` and `fr`).

## Configuration

Configuration is in `config/installer.php` :

  - ***Application name*** : the name of the application
  - ***Application version*** : the version number of the application
  - ***PHP version*** : you can set newer version if you need for your application (dont forget to update lang files too)
  - ***Server requirements*** : add other requirements if you need for your application
  - ***Permissions*** : add other permissions if you need for your application
  - ***Publish path*** : if you have to publish directories and files set the path (default is `null`).
  For example you have a `blog` directory with folders, subfolders and files at the root, set this value :
  ```
    'publish-path' => base_path('blog'),
  ```
  Take care that any file with same name will be changed for the new one.
  - ***Login url*** : set the login url for button at the end of installation
  - ***Administrator*** : set `true` if you want administrator creation with installation. Set also the `fields` if default values dont suit. But take care that these fields must fit the `create` method of AuthController (or your form request) because package uses this method to create the administrator. If you use form request for validation set it in **validator** configuration. If you use a custom creator method set it in **creator** configuration.

To add other informations to administrator as roles you can create this method in RegisterController :
```
protected function userAddValues(User $user)
{
    // Add elements to administrator record there
}
```
The user model is provided as method parameter so you can easily set a query.

## Todo list

  - Screenshots


