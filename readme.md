"# marketing" 

# Install project 

```
git clone https://github.com/chouti44/marketing
cd marketing
composer update 
/* linux */ cp .env.example .env
/* windows */ copy .env.example .env
php artisan key:generate
php artisan route:scan 
modifier les connexion à votre bdd .env
php artisan migrate

```
# Démarrage du serveur PHP

```bash

php -S localhost:8080 -d display_errors=1 -t ./public

```

### add fie cacert.pem in folder dans votre server php/ext/

add a text in php.ini

***

[cURL]

curl.cainfo="curl.cainfo="Z:\wamp\wamp64\bin\php\php7.0.10\ext\cacert.pem""

***