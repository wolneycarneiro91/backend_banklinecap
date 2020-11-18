#!/bin/bash

composer install

php artisan config:cache && php artisan config:clear

php artisan route:clear

php artisan migrate --seed

start chrome "http://localhost:8000"
start iexplore "http://localhost:8000"
start firefox "http://localhost:8000"


php artisan serve

