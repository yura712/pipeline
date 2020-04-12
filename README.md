## To do the next steps to deploy the project

Update .env (set up a connection to your db)

1. php artisan migrate 
2. php artisan db:seed --class=UserSeeder
3. php artisan db:seed --class=PostSeeder
4. php artisan serve
