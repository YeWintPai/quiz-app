
## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Alternative installation is possible without local dependencies relying on [Docker](#docker). 
Please install XAMPP,Composer and Laravel 9.x.
Create project directory using composer 

    composer create-project laravel/laravel:^9 CodeCraftersQuizApp
    
Clone the repository

    git clone https://github.com/YeWintPai/quiz-app.git

Switch to the repo folder

    cd laravel-quiz-app
Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

