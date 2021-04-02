Laravel RESTful API Example
=======
Sample repository to demonstrate RESTful API.

## Main Component
* Laravel 8.29.0 

## Requirement
* PHP >= 7.3.0
* MySQL
* Nginx / Apache

## Installation

1. Clone this repository (**`git clone https://github.com/suitmedia/laravel-restful-api-example.git`**)
1. Create dan configure `.env` file based on `.env.example`
1. Run `composer install` in the root project to install all dependencies including develeopment requirement.
1. Run `php artisan key:generate` in the root project to generate new Key for new Application.
1. Run `php artisan optimize` in the root project to flush and cache configuratin.
1. Run `php artisan migrate` in the root project to migrate main suitcms database.
1. Run `php artisan db:seed` in the root project to seed data.
1. Run `php artisan serve` in the root project to serve your project.
3. Done!

## Documentations
* Project endpoint documentation: http://your-project-base-url/docs
* Laravel documentation: https://laravel.com/docs/8.x
* Postman collection: https://www.getpostman.com/collections/b3d44811ec9256df3cb2
* Postman environtment: [Click here](postmant_environtment.json) (Change your base url on environtment base url with your project)
