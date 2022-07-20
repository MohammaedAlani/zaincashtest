<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Zain Cash Test


## Install

1- git clone https://github.com/MohammaedAlani/zaincashtest.git <br>
2- composer update <br>
3- create DB named zaincashtest <br>
4- cp .env.example .env <br>
5- php artisan optimize:clear <br>
6- php artisan migrate <br>
7- php artisan db:seed <br>


## Coding Test
1- Postman collection url https://www.postman.com/collections/91546fddb233e1fc9aa6 <br>
2- POST REEQUEST http://127.0.0.1:8000/api/file/upload <br>
3- file named found on root of project. <br>


## Database Test
1- http://127.0.0.1:8000/api/employees go to this url to get result <br>
the sql statement is below <br>

SELECT city, salary, GROUP_CONCAT(CONCAT_WS(' ',first_name, last_name) SEPARATOR ',') AS full_name, sum(salary) as total_salary FROM employees GROUP BY city;
<br>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# zaincashtest
