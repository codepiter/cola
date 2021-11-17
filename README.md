<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Ticket de atención al Cliente

Sistema para optimizar el tiempo de espera de los clientes que soliciten un ticket asignándolo a la cola de atención con menor tiempo de espera.

Se cuenta con 2 colas con tiempo fijo de 2 minutos y 3 minutos, una vez asignada el cliente a una de estas, posteriormente se puede editar este registro para marcar como atendido, por su parte al cambiar el estatus de atendido se genera un listado el cual se puede eliminar de manera definitiva.


## Instalación

### Clonando la aplicación

```shell
$ git clone https://github.com/codepiter/cola.git
```

### Ingrese a su nuevo directorio y cree y edite el .env

```shell
$ cp .env.example .env
```

### Instalando dependencias de Laravel

```shell
$ composer install
```

### Generando key a archivo .env

```shell
$ php artisan key:generate
```

### Cree una base de datos y haga los cambios necesarios en el archivo .env para lograr la conexion


        
### Generando tablas necesarias mediante migración (previamente ya usted creó la base de datos)

```shell
$ php artisan migrate:fresh --seed
```

### Instalando otras dependencias

```shell
$ npm install
```

```shell
$ npm run dev
```
