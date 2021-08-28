# laravel-crud
php version 8.0 <br>
open terminal then locate the project larave-crud <br>
step 1 npm install <br>
step 2 cp .env.example .env <br>
step 3 go to .env change the DB_DATABASE = myblog <br>
step 4 go to composer.json
change <br>
"require": {<br>
    "php": ">=7.3",<br>
},<br>

to <br>
"require": {<br>
    "php": "^7.3|^8.0",<br>
}, <br>
step 5 delete composer.lock file <br>
step 7 composer install <br>
step 8 php artisan key:generate <br>
step 9 if error try php artisan config:clear then php artisan config:cache <br>
step 10 php artisan migrate:fresh --seed
