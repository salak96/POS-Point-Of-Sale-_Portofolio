# Information Web
This App POS(Point Of Sales) on Laravel 9

## Requirement
1. [PHP 8]
2. [Laravel 9]
3. [milonBarcode]

## Installation
1. `git clone https://github.com/salak96/POS-Point-Of-Sale-_Portofolio.git`
2. Run `composer update` atau `composer install`
3. Edit file `env.example` ke `env`
4. Edit `DB_DATABASE=`  ke  `DB_DATABASE=mocadata`
5. Run `php artisan key:generate`
6. Migrate database `php artisan migrate`
7. Seeder table User, Pengaturan Run `php artisan db:seed`
8. Run `npm run dev`
9. Run the server with command `php artisan serve`
10. Open Browser http://127.0.0.1:8000/
11. Login
    `email`     adminpos@gmail.com'
    `password`  ('admintoko')
