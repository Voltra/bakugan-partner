# bakugan-partner

## Pre-requisites

- PHP 8.2
- Composer 2
- PHP configured to be able to run a barebones laravel app
- PHP configured to be used from the CLI
- Composer configured to be used from the CLI


## How to install

Clone the repo, then run the following commands inside the folder:

```bash
composer install
php artisan migrate --seed
```

## How to use

```bash
php artisan bakugan:partner
```

Alternatively you can provide your birthday right away:
```bash
php artisan bakugan:partner 1789-07-14
```
