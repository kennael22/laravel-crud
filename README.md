# laravel-crud
step 1 npm install <br>
step 2 open terminal locate the project then cp .env.example .env <br>
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
step 7 compose install <br>
step 8 in terminal php artisan key:generate <br>
step 9 php artisan config:clear <br>
step 10 php artisan config:cache <br>
step 11 php artisan migrate:fresh --seed
