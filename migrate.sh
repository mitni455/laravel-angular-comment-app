#!/bin/bash

php artisan migrate --path=app/database/migrations/schema
php artisan migrate --path=app/database/migrations/docs
php artisan migrate

php artisan db:seed --class=ClassesTableSeeder
php artisan db:seed --class=ClassPropertiesTableSeeder
php artisan db:seed --class=ClassMethodsTableSeeder
php artisan db:seed --class=ClassMethodArgumentsTableSeeder

php artisan db:seed --class=UserRolesTableSeeder
php artisan db:seed --class=UserStoriesTableSeeder
php artisan db:seed --class=UseCasesTableSeeder
php artisan db:seed --class=SequenceDiagramTableSeeder
