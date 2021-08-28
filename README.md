# laravel-crud
step 1 npm install
step 2 open terminal locate the project then cp .env.example .env
step 3 go to .env change the DB_DATABASE = myblog
step 4 compose install
step 5 go to compose.json
change
"require": {
    "php": ">=7.3",
    .....
},

to 
"require": {
    "php": "^7.3|^8.0",
    .....
},
step 6 in terminal php artisan key:generate
step 7 php artisan config:clear
step 8 php artisan config:cache
