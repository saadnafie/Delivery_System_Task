# Steps to run the application:

1. download project from github
2. open project folder
3. run "composer install" command in terminal
4. create database with name "delivery_system"
4. change file name from ".env.example" to ".env"
5. open ".env" file and change "DB_DATABASE=laravel" to "DB_DATABASE=delivery_system"
6. run "php artisan key:generate " command in terminal
7. run "php artisan migrate:refresh --seed" command in terminal
8. run "php artisan serve" command in terminal
9. you will get url to run in browser
10. get user credential from database and the password is "12345678"
