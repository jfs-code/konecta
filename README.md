<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## EJECUTAR PROYECTO LARAVEL

Aquí encontrarás los pasos a seguir para ejecutar el proyecto desarrollado en Laravel.

Al descargar/clonar el proyecto se debe abrir una consola que apunte a su raiz y ejecutar los siguientes comandos:
- composer i
- npm i

Lo siguiente es configurar la base de datos, para este caso he subido a este repositorio el .env ya configurado y el SQL (se llama KONECTA), se debe:
- Importar el sql

Una vez realizada la configuración anterior solamente queda ejecutar el proyecto, para esto se deben ejecutar el siguiente comando en una consola que apunte a la raiz:
- npm run dev

Luego se ejecuta el siguiente comando donde saldrá un enlace al servidor local el cual nos permitirá visualizarlo en el navegador de preferencia:
- php artisan serve