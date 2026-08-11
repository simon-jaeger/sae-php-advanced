# laravel

...

## dependencies

- php 8.5+
- composer 2.10+

## setup

```bash
composer install # install dependencies
touch ./database/database.sqlite # create database
php artisan migrate:fresh --seed # seed database
php artisan serve # start development server
```

## common issues

- php installed via xampp might cause issues. if that happens, install it with homebrew/scoop instead.
- your anti virus might block/delete files inside laravel. if so, whitelist the folder.
- php might be compiled without certain modules (e.g. pdo_sqlite). if so, manually enable them in ini file. you might need to copy php.ini-development to php.ini (find location with php --ini)
- ssl errors, e.g. when sending emails (Failed to authenticate on SMTP server) might mean your php binary is missing openssl. if so, manually enable the extension in your php.ini

