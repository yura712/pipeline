To do the next steps to deploy the project

Set up the connection to db in .env 

php artisan migrate 
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=PostSeeder
php artisan serve
