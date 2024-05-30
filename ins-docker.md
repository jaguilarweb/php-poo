# Docker con PHP

## Introducción

Este es un tutorial para crear un proyecto php en Docker adapatando las instrucciones de instalación de un proyecto de Laravel (proyecto de referencia).

Referencia: Proyecto "laravel-mysql-may24".

Tutorial de referencia utilizado:
[Video](https://www.youtube.com/watch?v=V-MDfE1I6u0) |
[Repositorio](https://github.com/pitocms/laravel-docker/tree/main)

## Instalación

Una vez creados los archivos Dockerfile y docker-compose.yml, ejecutar el siguiente comando:

```bash
docker-compose build
```

## Makefile

Con makefile, podemos escribir los comandos que queremos que se ejecuten (de docker-compose) más abreviados.

```bash
make up
make down
make build
```

## Composer

Tenemos 2 alternativas:

- Ya haber agregado la instalación de composer en el script del Dockerfile para que se ejecute al momento de construir la imagen, esto creará un archivo json (si lo descargamos de git en proyectos futuros).

- Instalar composer dentro del contenedor (manualmente).

Para instalar composer manualmente, debemos ingresar al contenedor (en este caso php-docker).

```bash
docker exec -it php-docker bash
```

Y ejecutamos el comando para instalar composer (nota interna: seguir las instrucciones del proyecto: 'php-compose-packagist').


```bash
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

Para verificar que Composer se ha instalado correctamente, ejecutamos el siguiente comando en la terminal:

```bash
composer --version
```

## Composer configuración

Usando el comando:
  
  ```bash
  composer init
  ```

  Seguir las instrucciones de la terminal


  ```Makefile
composer-update:
	docker exec php-docker bash -c "composer update"
  ```

Y en la terminal, posicionados en el archivo raíz del proyecto (no dentro del contenedor) ejecutamos:

```bash
make composer-update
```



## Configuración de la base de datos

Para configurar la base de datos, se debe modificar el archivo .env que se encuentra en la raíz del proyecto.

Primero, vamos a phpmyadmin:

Server: mysql_db  // Nombre del servicio creado en el docker-composer.
Username: root
Password: root

La Base de datos, el nombre se obtiene del archivo .yml, en este caso `laravel_docker`

Estos datos tienen que estar en el archivo .env:

Se descargaron así en el proyecto creado:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Se modifican así, para el caso de este proyecto:

```bash
DB_CONNECTION=mysql
DB_HOST=mysql_db
DB_PORT=3306
DB_DATABASE=laravel_docker
DB_USERNAME=root
DB_PASSWORD=root
```


## Setup

Ahora automatizaremos toda la configuración inicial mediante un comando setup en nuestro makefile.

```Makefile
setup:
  @make build
  @make up
  @make composer-update
```

Y ejecutamos el comando:

```bash
$ make setup
```

Entonces, una vez que descargamos el proyecto desde git en local.
Ejecutamos el comando setup.
Actualizamos el archivo .env con los datos de la base de datos.
Y corremos el comando `make data` para la base de datos.





