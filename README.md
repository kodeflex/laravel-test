# laravel-test

## Prerequisites

- Install Laravel (https://laravel.com/docs/5.1#installation)
- Install Vagrant (https://www.vagrantup.com/)
- Install VirtualBox (https://www.virtualbox.org/wiki/Downloads)

## Setup

```
git clone git@github.com:kodeflex/laravel-test.git
cd laravel-test
```

Run `npm i` 

>`composer install` runs in background as a `preinstall` npm script

## Start

### PHP built-in Server

- Run `npm start`

### Vagrant/Homestead

- Run `npm run vagrant:init:<mac|windows>` command to initialize the devleopment environment
- Run `npm run vagrant` or `vagrant up` 
- Run `npm run vagrant:destroy` or `vagrant destroy` to destroy the Vagrant env.

## Database migrations/seed

```
php artisan migrate
php artisan db:seed
```

## API with Basic Authentication

> Using `laravel/passport`

See `routes/api.php` for sample routes.

### Create oAuth clients

`php artisan passport:client [--personal|--passowrd]`

### Get `access_token`

 ```
 POST <your-ip-or-domain>/oauth/token
 ```

**request-body**
```json
{
    "client_id": "<client-id>",
    "client_secret": "<client_secret>",
    "grant_type": "password",
    "scope": "*",
    "username": "<email>", 
    "password": "<password>"
}
```

**response**
```json
{
    "token_type": "Bearer",
    "expires_in": 31535999,
    "access_token": "<access_token>"
}
```

### Sending API request with Authorization Header

```
GET /api/v1/users HTTP/1.1
Host: host-ip
Accept: application/json
Authorization: Bearer <access_token>
Cache-Control: no-cache
```
