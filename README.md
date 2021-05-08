## TodoApp

TODO application is a system for daily task management. It enables users to add and complete TODO items, which represent his/her daily tasks.

## Prerequisites

1. [Docker Desktop](https://www.docker.com/products/docker-desktop)
2. [Composer](https://getcomposer.org/download/)

## Setup

1. Unzip the project folder and open your terminal.
2. Navigate to the app folder `cd TodoApp`
3. Install dependencies `composer install`
4. Copy contents from '.env.example' to '.env' `cp .env.example .env`
5. Run the project setup `./vendor/bin/sail up`
6. Execute into laravel container `docker exec -it todoapp_laravel.test_1 bash`
7. Run migrations and seeders `php artisan migrate:fresh --seed`
8. Visit [localhost/api/todos](http://localhost/api/todos) to see a list of todos and make sure everything works.
