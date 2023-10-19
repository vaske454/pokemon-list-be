<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Get Started

1. Clone this repository on your computer
2. Navigate to the project's root directory and initiate it by running
```
ddev start
```
3. Install all required Composer dependencies: 

```
ddev composer install
```
4. Then, generate a key for your application by running this command:
```
ddev exec "php artisan key:generate"
```
5. Execute Laravel migrations to create the database:
```
ddev artisan migrate
```
6. Import Pokémon data:
```
ddev artisan app:import-pokemon-data
```

## Usage
Once you've set up the project, you can access it in your web browser at [http://localhost:8000]

## Authors
- Vasilije Tomović
