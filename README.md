# Backend | Prueba tecnica

Repositorio para Prueba tecnica Grupo Apok. Desarrollado con Laravel 10.10

### Pre-requisitos 📋

```
PHP 8.1.9
Git
```

### Despliegue en local 🔧

Clonamos el proyecto a través de Git (en la carpeta raíz definida en Laragon)
```
git clone https://github.com/leesaturno/prueba-tecnica-backend-laravel.git
```

Ejecutamos composer install para la incorporación de dependencias

```php
php composer.phar install
```
Definir en .env las siguientes variables:
```
DB_DATABASE=prueba_tecnica_backend_laravel
```
Previo a ejecutar los comandos de artisan, asegurese de que esta ejecutando MySQL
Ejecutamos el comando artisan para generar una clave única:

```php
php artisan key:generate
```

Ejecutamos el comando artisan migrate para añadir las tablas a nuestra base de datos:

```php
php artisan migrate --seed
```
Ejecutamos el comando artisan serve para servir la aplicación :

```php
php artisan serve
```
