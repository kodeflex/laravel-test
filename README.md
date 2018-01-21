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

- Run `npm start` start server with php built-in server
- Run `npm run vagrant` or `vagrant up` to start server in the Vagrant/Homestead environment.
- Run `npm run vagrant:destroy` or `vagrant destroy` to destroy the Vagrant env.