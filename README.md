# Application

This Application is a RESTFUL API dealing with simple customer engagement form submission.

Requirements


## Installation

1. Download  [PHP version 7](https://windows.php.net/download/) to install supported PHP version.
2. Configure PHP to run correctly on your system - In the PHP7 folder, rename the file php.ini-development to php.ini and uncomment the following extensions:

```python
extension=mbstring
extension=mysqli
extension=openssl
extension=pdo_mysql
extension=pdo_sqlite
```
3. Run Composer Update

4. Create .env file from .env.example file and update Database configuration
```python
DB_HOST=###
DB_PORT=###
DB_DATABASE=###
DB_USERNAME=###
DB_PASSWORD=###
```
In Terminal - 
run the following commands to install necessary tables
php artisan migrate:refresh
php -S localhost:8000 -t public

Test API Endpoints:
(GET)  /record - to create a new record in database with 3 parameters (firstname, surname, email)
Example
```python
URL=http://localhost:8000/record?firstname=1&surname=2&email=3
```


# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
