
## Installation
Install XAMPP,Composer and Laravel 9.x.
After installation start XAMPP.
Setting up MySQL

    import quiz_app.sql in localhost/phpmyadmin

    
Clone the repository

    git clone https://github.com/YeWintPai/quiz-app.git

Switch to the repo folder

    cd quiz-app
    
Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    copy .env.example and rename the .env.copy.example to .env

In .env file change DB_DATABASE to 

    DB_DATABASE = quiz_app

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate


Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

