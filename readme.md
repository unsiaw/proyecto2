<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Instalación y uso

## Paso 1

### Con GIT
```
git clone https://github.com/unsiaw/proyecto2.git
cd proyecto2
composer update
```

### Con Composer
```
composer create-project unsiaw/proyecto2 proyecto2
cd proyecto2
```

## Paso 2

Copiar el ejemplo de variables de entorno 

### En Unix
```
cp .env.example .env
```
### En Windows
```
copy .env.example .env
```

Editarlo según corresponda.


## Paso 3

Generar una nueva key 
```
php artisan key:generate
```

Migrar la base de datos y cargar algunos datos iniciales
```
php artisan migrate
php artisan db:seed
```

De ser necesario, crear un link simbólico de la carpeta public a storage con el siguiente comando
```
php artisan storage:link
```

## Paso 4

Correrlo en la consola
```
php artisan serve
```

Entrar a la página según lo configurado en el archivo ```.env```. Por defecto es **localhost:8000**

