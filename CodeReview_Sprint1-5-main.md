# Revisión de código Sprint1-5-main - PHP POO 2

**Exercise 1-1:**

- OK, al menos 2 animales como se pide, y cada uno con su sonido.
- Uso correcto de clase abstracta.
- Los métodos `makeSound()` de las subclases, no tienen visibilidad ¿añadirías `public`?
- Las clases se podrían separar en ficheros independientes.


**Exercise 1-2:**

- Bien, `Shape` se define como clase abstracta con `area()`.
- Ok, `Rectangle` y `Triangle` heredan de `Shape` y calculan.
- Las clases se podrían separar en ficheros independientes.
- Propiedades `$width` y `$height` son `public`. ¡OJO! Las subclases puedan acceder pero ¿el código exterior?
- Los métodos `area()` y `__construct()` no tienen visibilidad.

**Exercise 2-1:**

- `Circle` se añade como subclase de `Shape` y cálculo es correcto.
- `Circle` en el `__construct()` se usa ¿`$width` y `$height`?, un círculo no tiene ancho ni alto.
- `Circle` se usa ¿`$this->width` y `$this->height`? para almacenar el radio.
- Lo correcto no sería usar una propiedad `$radius`.
- La llave de cierre de `area()` en `Circle`, revisa la alineación.
- Las clases se podrían separar en ficheros independientes.

## Comentarios generales

- También estaría bien añadir el fichero `README.md` en los ejercicios y así vas acostumbrándote (comentarlo con Rubén, a ver que opina).
- Se podría añadir tipado a los métodos (`string`, `float`, `int`, `array`).
- `Circle` en Exercise 2-1: utilizar `$width` y `$height` para representar el radio que no tiene sentido semántico, es confuso.
