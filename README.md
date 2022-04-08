## Setup

This project was built using [Laravel Sail](https://laravel.com/docs/9.x/sail#main-content). It's recommended that you have Docker installed before continuing.
- `git clone https://github.com/RedArchon/sitix-blade.git`
- create a copy of `.env.example` and name the file `.env`
- cd into the new project's directory and run `composer install`
- `php artisan key:generate`
- `./vendor/bin/sail up` if you encounter any errors, use the step below to clear the cache.
- `./vendor/bin/sail build --no-cache` or use whichever alias you may have set for `./vendor/bin/sail` and then 
- Configure your MySQL connection using the credentials provided in `.env` and create a schema/database named `sitix_blade`
- `php artisan sail:install` and choose `mysql`
- Run `./vendor/bin/sail artisan migrate:fresh --seed`
- `./vendor/bin/sail npm install && npm run dev`
- Open your browser and head to `sitix-blade.test` or `localhost`
