/*
- Son estructuras que nos permiten almacenar varios datos y agruparlos.
- Se pueden llenar con cualquier tipo de dato válido en JavaScript y deben ir separados por comas
- Se pueden mezclar tipos de datos, pero no es recomendable.
- Se declaran con llaves cuadradas o corchetes []
- Pueden declararse vacios o con un contenido ya establecido
- Pueden añadirse o eliminarse elemento en el momento que queramos

	let array = [] //array vacio
	let numeros = [1,2,3,4,5] //Array con contenido inicial
*/

// Declarando e Inicializando arreglos
let numeros = [1,2,3,4,5,6];

let palabras = ['hola', 'estamos', 'en', 'Youtube'];

let booleans = [true, true, false];

// Sumando datos del arreglo
console.log(numeros[0]+numeros[1]);

// Usando TemplateString usando datos del array
console.log(`La palabra "${palabras[3]}" tiene ${palabras[3].length} letras`);

// Mostrando el array
console.log(numeros);