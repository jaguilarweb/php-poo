# Curso Programación Orientada a Objetos con PHP

## Introducción

Este proyecto son notas del Curso programación orientada a objetos en PHP. Este recorre los conceptos básicos de la programación orientada a objetos y cómo aplicarlos en PHP.

Nota personal:
También aprovecho este curso para practicar el uso y configuración de contenedores Docker para crear mi ambientes de desarrollo; el uso de Git para prácticar comandos de esta herramienta de versionamiento y subir un repositorio remoto a Github; PHPUnit para realizar pruebas unitarias y el uso de Composer como manejador de dependencias de php.


Plataforma: Platzi
Prof: Italo Morales

## ¿Qué es la Programación Orientada a Objetos?

Es la técnica.
La forma de pensar para realizar sistemas

Ilustración de los pasos:

1.- Crear la Clase User.php (Molde)
2.- Crear Objeto 1: $user1 = newUsr;
3.- Crear Objeto 2: $user2 = newUsr;

## Deuda técnica

Es la acumulación de errores en el código que se van acumulando con el tiempo.
La deuda técnica es el coste y los intereses a pagar por hacer mal las cosas. El sobre esfuerzo a pagar para mantener un producto software mal hecho, y lo que conlleva, como el coste de la mala imagen frente a los clientes, etc.

¿Cómo evitar la deuda técnica?
- Tenemos que programar con pruebas (php unit).
- Documentar a tiempo
- Refactorizar (mejorar) de inmediato nuestro código.

## Code Smell

Es un término que se utiliza para describir una serie de patrones que pueden indicar que nuestro código no está bien estructurado.

Hace referencia al mal olor del código. Este concepto no se refiere a errores técnicos, sino a **errores de orden y diseño**. Esto sucede mucho cuando intentamos crear soluciones a partir de otras soluciones.

La solución a estos casos es crear una abstracción.

**Cómo evitarlo**
Para esto debemos hacer una programación más limpia, y reusable. Tenemos que evitar crear grandes métodos, o sea, programación estructura dentro de clases. También evitar crear grandes clases o superclases.

Y sin duda, nosotros debemos evitar a toda costa copiar y pegar código.

Recuerda: el sistema va a funcionar pero a futuro va a ser horrible de mantener, hasta imposible.

## Código Spagueti

Es un término que se utiliza para describir un código que es muy difícil de leer y entender. Es un código que no tiene una estructura clara y que es muy difícil de mantener.

Un código espagueti es código que está estructurado mediante if, while, for netamente, todo en un mismo archivo donde solamente buscamos resolver el problema. Cuando creamos código estructurado corremos peligro de crear código espagueti. La OOP nos ayuda evitarlo.

El dinero en esta profesión está en el mantenimiento del código.

**Cómo evitar el código espagueti**
- Resolver el problema
- Refactorizar (cuando ya se ha resuelto el problema)
- Crea de forma lógica y coherente diferentes métodos que reemplacen tus estructuras de control.
- Crea una o varias clases dependiendo el caso.

## Inclusión de archivos

Para incluir archivos en PHP se utiliza la función `require` o `include`. La diferencia entre ambas es que `require` detiene la ejecución del programa si no encuentra el archivo, mientras que `include` no.

- **include'<ruta>'**: Como la palabra lo dice, incluye un archivo dentro de otro. Cuando el archivo no es encontrado o tiene algún error, el sistema lanzara un warning pero seguirá trabajando.

- **require ('<ruta>')**: Funciona igual que include la única diferencia es que este arrojara un fatal error a nivel de compilación y todo el sistema dejara de funcionar hasta que se solucione el problema.

- **requiere_once ('<ruta>')**: Funciona igual que requiere excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.

- **include_once '<ruta>'**: Tiene un comportamiento similar al de la sentencia include, siendo la única diferencia de que si el código del fichero ya ha sido incluido, no se volverá a incluir, e include_once devolverá TRUE. Como su nombre indica, el fichero será incluido solamente una vez.

Nota: El error fatal (que en este caso da el require si no existe el archivo), detiene el sistema.

## Introducción a clases y objetos

Una clase es un molde para crear objetos. Un objeto es una instancia de una clase.

**Clase**: Define las propiedades y métodos comunes de todos los objetos que se creen a partir de ella.
**Objeto**: Es una instancia de una clase.

Signos
- **->**: Acceder a un método de un objeto.
- **::**: Acceder a un método estático de una clase.
- **$** : Indica una variable.
- **new**: 

## Características de la POO

### Abstracción

La abstracción es una técnica que nos permite modelar las características esenciales de un objeto, ignorando las características no esenciales.

- Aislar, separar u organizar, pensando siempre en el resultado final


### Alcance o Encapsulamiento

El alcance de una variable es el contexto dentro del cual la variable existe y es accesible. En PHP, el alcance de una variable se define por las reglas de visibilidad.

#### Tipos de alcance

Es el principio de ocultación o encapsulación.

**public**: Accesible desde cualquier parte del código
**protected**: Accesible desde la misma clase y clases que heredan de ella
**private**: Accesible solo desde la misma clase, ni siquiera los hijos pueden acceder


### Modularidad

La modularidad es una técnica de diseño que tiene como objetivo dividir un programa en partes más pequeñas y manejables. Cada parte del programa se conoce como módulo.

Esto beneficia el mantenimiento del código.


### Polimorfismo

El polimorfismo es una técnica que nos permite llamar a un método distinto dependiendo del objeto que lo esté llamando.

#### Interfaces

Las interfaces de objetos permiten crear código con el cual especificar qué métodos deben ser implementados por una clase, sin tener que definir cómo estos métodos son manipulados.

Las interfaces se definen de la misma manera que una clase, aunque reemplazando la palabra reservada class por la palabra reservada interface y sin que ninguno de sus métodos tenga su contenido definido.

Todos los métodos declarados en una interfaz deben ser públicos, ya que ésta es la naturaleza de una interfaz.

#### Diferencia en entre interface y clase abstracta

Mis notas: Tendrás clara la utilidad de las interfaces cuando programes en forma avanzada, mientras tanto para seguir avanzando quédate con este poco preciso pero simple ejemplo: Imagina al programador senior que tiene que trabajar en equipo con varios programadores, cada uno programa las clases como quiere, así que el senior para asegurarse unos mínimos crea interfaces para que la use su equipo con este discurso "Podemos resolver esta asignación como queramos pero como mínimo incorporen estos métodos en sus clases". Por tanto, la interfaz declara las funciones (métodos) que espera como mínimo pero cómo las implementas en tu solución ya es cosa tuya. Por tanto puedes verla incluso como una guía que te orienta respecto a lo que debería hacer tu clase.

Una interfaz solo describe el comportamiento. En consecuencia, no podemos implementar getters y setters dentro de una interfaz. 

Esta es la naturaleza de las interfaces: son necesarias para trabajar con el comportamiento, no con el estado.


- Una clase abstracta puede tener métodos concretos y métodos abstractos, mientras que una interfaz solo puede tener métodos abstractos.
- Una clase puede heredar de una sola clase abstracta, pero puede implementar múltiples interfaces.
- Una clase abstracta puede tener propiedades, mientras que una interfaz no puede tener propiedades.
- La clase abstracta tiene un constructor vacio
- La clase abstracta puede tener métodos concretos y métodos abstractos, mientras que una interfaz solo puede tener métodos abstractos.
- Las interfaces tienen constructores sin parámetros
- Las interfaces no pueden tener propiedades
- Las interfaces no pueden tener métodos concretos
- Las interfaces se utilizan para definir contratos, mientras que las clases abstractas se utilizan para definir clases base.


### Herencia

La herencia es una técnica que nos permite crear una nueva clase a partir de una clase existente. La nueva clase hereda todos los métodos y propiedades de la clase existente, pero también puede tener sus propios métodos y propiedades.

La herencia es una técnica que nos permite reutilizar código y crear una jerarquía de clases.

Cuando creo una clase hija, aún si no tiene ningún método dentro puedo hacer uso de los métodos de la clase padre. También puedo sobreescribir el método en la clase hija. 

No obstante, si agrego el prefijo final al método no podré sobreescribirlo, porque el método es final. También puedo evitar la herencia en las clases usando el mismo prefijo.

**¿Que es un método 'final'?**
Un método final no puede ser sobreescrito o reemplazado por una subclase. Esto es útil cuando queremos asegurarnos de que un método no sea modificado por una subclase.


## Resumen
La programación orientada a objetos es una forma de programar, un paradigma o una técnica. Los conceptos que aquí aprendiste te servirán en PHP y en otros lenguajes de programación. Recordemos que para programar de esta forma en realidad debemos crear objetos, y un objeto es una instancia de una clase y una clase es el molde. Ejemplo:

**Programación orientada a objetos**: es la técnica.
**PHP**: es el lenguaje de programación (donde implementamos la técnica).
Podemos resumir los diferentes conceptos de la siguiente manera:

- Herencia: compartir métodos entre clases padres y clases hijas.
- Abstracción: significa aislar, separar y sacar.
- Polimorfismo: capacidad o virtud que tienen los métodos donde, por ejemplo, un mismo método puede tener diferentes comportamientos y dar diferentes resultados.
- Modularidad: este principio básicamente nos ayuda a tener cada vez piezas de código más pequeñas y entendibles, donde cada pieza es un módulo y muchos módulos forman el sistema entero.
- Encapsulamiento: un objeto debe estar aislado y ser un módulo natural. Esto se cumple aplicando la protección a las propiedades impidiendo su modificación y básicamente se refiere a controlar el acceso.

Al entender este estilo conseguimos organizar mucho mejor nuestro código agrupando tareas comunes para crear una sola solución y usarla las veces que sean necesarias en nuestro proyecto. Evitamos con esto repetir código y ganamos mucho al dar mantenimiento en el futuro.

- Comienza con la palabra reservada **class**.
- El código va entre llaves { }.
- La información se guarda en propiedades que pueden ser públicas, privadas o protegidas.
- Cada acción la colocamos en métodos que básicamente son funciones o bloques de código dentro de una clase.
- `$this` es una variable reservada por el lenguaje que podemos usar para acceder a elementos propios, siempre y cuando estemos en la instancia de la clase.
- `new` es la palabra clave usada para crear un objeto a partir de una clase.

En el mundo de la programación tenemos muchas técnicas y formas, podemos instanciar una clase dentro de otra y navegar por sus métodos sin restricción.

## Proyecto

1.- Agregaremos phpunit en el directorio que creamos para el proyecto:

Curso->proyecto

Como en este caso estamos trabajando con contenedores, debemos ingresar a la terminal del contenedor:
```bash
docker exec -it curso_php bash
```
Ya tenemos instalado composer así que intalamos phpunit al proyecto:

```bash
composer require --dev phpunit/phpunit 10.5
```

phpunit es:
>Un framework de pruebas unitarias para PHP

Ahora configuramos, modificando algunos datos en el composer.json

```json
    "name": "jenny/post",
    "description": "Proyecto de POO",
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    },
```

Ahora, para que esto se registre en el sistema autoload ejecutamos:
  
  ```bash
  composer dump
  ```

2.- Configuracion básica de phpunit, la realizamos creando el archivo phpunit.xml

```xml
<?xml version="1.0" enconding="UTF-8" ?>
<phpunit bootstrap="vendor/autoload.php" colors="true" >

    <testsuites>
        <testsuite name="Test directory">
            <directory>tests</directory>
        </testsuite>
    </testsuites>

</phpunit>
```

3.- Creamos la carpeta tests y dentro de ella el archivo PostTest.php

Luego que tenemos el archivo con las pruebas, las ejecutamos:

```bash
vendor/phpunit/phpunit/phpunit
```

Van a aparecer errores, y a partir de ahí comienzo a crear el código para resolver esos errores.







