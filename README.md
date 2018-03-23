
## Laravel Night 2018

LaravelNight es el evento anual de PHP más importante en Buenos Aires, el objetivo del mismo es poner bajo un mismo techo a los mejores exponentes de las distintas herramientas disponibles en el mercado y acercar el conocimiento a nuestras comunidades locales. Cuenta con más de 4 horas de contenido, sorteos y más..

## Consultas de Busqueda Avanzadas en Eloquent usando Decorator

Tener todos los filtros realizando acciones en un archivo significa que tendremos que seguir modificando la clase cada vez que quiera agregar un nuevo filtro o modificar el comportamiento de uno existente. Por lo tanto, tiene sentido tener una clase de filtro dedicada para cada opción disponible.

Cualquier pregunta soj3da@gmail.com en el Slack de Laraveles

## Patron Decorator

"Este patrón de diseño nos permite modificar, retirar o agregar responsabilidades a un objeto dinámicamente. Cuando digo dinámicamente, me refiero a que las funcionalidades se modifican/agregan/retiran durante la ejecución del script o aplicación."

### Ventajas

La gran ventaja es que nos permite extender objetos incluso en situaciones cuando la extensión vía herencia no es viable o no es necesaria. Adicionalmente nos ayuda a conservar el principio de Abierto/Cerrado, en donde se dicta que cada entidad debe estar abierta a extensión pero cerrada a modificación.

### Desventajas

Si estas decorando demasiado a un objeto, vas a terminar con un montón de decoraciones (clases) pequeñas. Si tu código está muy desordenado, entonces vas a tener pesadillas tratando de encontrar las clases decorativas.

Aumento en la complejidad a la hora de instanciar el objeto a ser decorado. Al instanciarlo, debes envolverlo en quién sabe cuantas decoraciones, así que es importante usar el sentido común.


