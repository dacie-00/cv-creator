# CV 

A Laravel based CV creator with an intuitive editor

## Features

* User system using Laravel Breeze
* CV managment including creation, deletion, updating
* A visual editor to easily update CVs
* Supports Docker through Laravel Sail

## Demo

https://github.com/user-attachments/assets/3589c184-3f57-46cc-a544-3c7ce76f5926


## Requirements

* PHP >= 8.3
* Composer >= 2.7.2
* Docker
* 

## First time setup

* ```git clone https://github.com/dacie-00/cv-creator.git```
* ```composer install```
* Create .env based on .env.example in root directory
* ```./vendor/bin/sail up```
* ```php artisan migrate```
* ```php artisan storage:link```
* ```php artisan key:generate```
* ```npm install```
* ```npm run build```

## Seeding DB with fake data
```php artisan db:seed```
Test user - 
    Email - test@test.test
    Password - testtest
