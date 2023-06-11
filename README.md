<h2>Demo App Made using Laravel 10</h2>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Prerequisites
- Install Latest PHP (preferabbly PHP 8.1.19)
- Install Composer globally
- Install globally Node.js latest version and compatible NPM (preferabbly node: v14.16.0 and npm: 6.14.11)
- Install DBMS like sqlyog or any similar app

## Installation Guide
- Git Clone https://github.com/manish-dewani/laravel-breeze-demo.git
- Open Command Prompt Terminal
- CD to the cloned folder
- run composer self-update
- run composer update

    #### Database Configuration
    - go to dbms i.e sqlyog 
    - Create database named Makeship
    - run php artisan migrate
    - (if this dosent create tables in you database)
        - go to .env file inside project folder
        - check for database configuration
            ```
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=makeship
            DB_USERNAME=root
            DB_PASSWORD=
           ```

- run php artisan db:seed --class=RolesTableSeeder
- run npm run dev
- Open another Command Prompt Terminal
- run php artisan serve

                               Voila! welcome to laravel
