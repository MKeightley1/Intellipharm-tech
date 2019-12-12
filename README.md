# Application

This Application is a RESTFUL API dealing with simple customer engagement form submission.

#Task
We would like to see you use PHP to select data from a mysql database table (see included members.sql) and produce a JSON view of this data. Your javascript application will consume and display this data according to the "Javascript / UI Requirements" section below. 

Extra points for using an PHP MVC framework to achieve this part. The URL should be able to take 3 GET or POST string arguments : "firstname", "surname" and "email". These arguments should be used to limit the results in the JSON output to only include records the search strings match in their respective MySQL database fields. 



## Installation

1. Download  [PHP version 7](https://windows.php.net/download/) to install supported PHP version.
2. Configure PHP to run correctly on your system - In the PHP7 folder, rename the file php.ini-development to php.ini and uncomment the following extensions:

```python
extension=mbstring
extension=mysqli
extension=openssl
extension=pdo_mysql
extension=pdo_odbc
extension=pdo_pgsql
extension=pdo_sqlite




```
3. To install required vendor directory - please Run "Composer Update" command in terminal

4. Create .env file from .env.example file and update Database configuration
```python
DB_HOST=###
DB_PORT=###
DB_DATABASE=###
DB_USERNAME=###
DB_PASSWORD=###
```
In Terminal - run the following command to install necessary tables
php artisan migrate:refresh
In Terminal - run local server:
php -S localhost:8000 -t public

Test API Endpoints:
(GET/POST)  /create - to create a new record in database with 3 parameters (firstname, surname, email)
Example
```python
URL=http://localhost:8000/create?firstname=1&surname=2&email=3
```
(GET/POST)  /read - to read in all records to date - filter by any of the 3 parameters (firstname, surname, email)
Example
```python
URL=http://localhost:8000/read?firstname=1&surname=2&email=3
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
