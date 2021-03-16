# Postman Collection

https://www.getpostman.com/collections/abd446c0c56d7a26cea0

Postman Env
--
|Variable|Value|
|--|--|
| API_URL | YOUR_APP_URL_HERE/api/v1 |


## Database Structure

![Database Structure](https://i.imgur.com/vUa0cOE.png)

## Setup Command

```sh
composer install
cp .env.example .env
php artisan key:generate
composer dump-autoload
php artisan db:seed
```