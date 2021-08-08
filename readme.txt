method 1
composer global require laravel/installer

laravel new example-app

cd example-app

php artisan serve


method 2
composer create-project laravel/laravel example-app

cd example-app

php artisan serve


php artisan make:controller ControllerName --invokable
php artisan make:controller ControllerName --resource

Route::get("path","ControlllerFile");


php artisan make:controller CustomersController --model=Customer

php artisan make:model ModelName -mcr

php artisan make:component componentname
php artisan make:middleware middlewarename

php artisan make:migration create_test_table
php artisan migrate
php artisan migrate:reset
php artisan migrate:rollback --step 3
php artisan migrate --path=/database/migrations/2020_09_21_141958_create_test5_table.php
php artisan migrate:refresh

php artisan make:seeder Name

php artisan stub:publish 
php artisan make:mail SampleMail --markdown=emails.SampleMail 
php artisan make:command showDB


