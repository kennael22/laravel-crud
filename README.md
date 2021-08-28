# laravel-crud
step 1 npm install <br>
step 2 open terminal locate the project then cp .env.example .env <br>
step 3 go to .env change the DB_DATABASE = myblog <br>
step 4 go to compose.json
change
"require": {
    "php": ">=7.3",
    .....
},

to 
"require": {
    "php": "^7.3|^8.0",
    .....
}, <br>
step 5 compose install <br>
step 6 in terminal php artisan key:generate <br>
step 7 php artisan config:clear <br>
step 8 php artisan config:cache <br>
