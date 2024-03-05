<p align="center"><a href="https://github.com/Maysker/dishnicars-backend" target="_blank"><img src="https://raw.githubusercontent.com/Maysker/dishnicars/master/images/dc-logo.png" width="400" alt="DishniCars Logo"></a></p>

## About DishniCars Backend

DishniCars Backend is the server-side component of the website created for a company involved in car repair, tuning, and buying/selling. The backend performs key functions such as data processing, user session management, security, and database integration, ensuring the reliability and performance of the web service. It is designed for close interaction with the [frontend](https://github.com/Maysker/dishnicars), supporting all necessary APIs for the website's operation.

- Fast and simple router.
- Powerful dependency injection container.
- Expressive, intuitive database ORM.
- Database schema agnostic migrations.
- Powerful background job processing.
- Real-time event broadcasting.

### Frontend Link

To explore the user interface and functionality provided to users, visit the repository of our project's frontend:

[DishniCars Frontend](https://github.com/Maysker/dishnicars)

## Getting Started

### Requirements

To run the DishniCars backend, you need the following environment:

- PHP version 7.3 or higher
- PHP PDO extension for database interaction
- Composer for managing dependencies
- Node.js and npm for asset compilation (if necessary)
- Database server compatible with Laravel, such as MySQL or PostgreSQL

### Installation

Step-by-step instructions for installing and setting up the project on a local machine:

```bash
git clone https://github.com/Maysker/dishnicars-backend.git
cd dishnicars-backend
composer install
cp .env.example .env
# Configure your .env file with the appropriate database parameters
php artisan key:generate
php artisan migrate
```
### Running

Instructions for running a local development server:
```bash
php artisan serve
```
### Contributing

We appreciate your desire to contribute to the DishniCars website! If you'd like to suggest changes, please create a pull request.

### Security Vulnerabilities

If you discover a security vulnerability in the DishniCars project, please email the developers. All security vulnerabilities will be promptly addressed.

### License

The DishniCars project is open-source software licensed under the [MIT License](https://opensource.org/licenses/MIT)

