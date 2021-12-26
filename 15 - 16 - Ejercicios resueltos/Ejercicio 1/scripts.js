/*
1 - Solicita un nombre, la edad y muestra por consola el mensaje "Hola ____, tienes ____ años y el año que viene tendrás ____ años" Realiza el ejercicio con prompt(mensaje) y haz uso de los template strings
*/

let name = prompt('Introduzca el nombre');
// Como la variable esta declarada como string usamos parseInt para convertirlo a numero
let age = parseInt(prompt('Introduzca la edad'));

console.log(`Hola ${name}, tienes ${age} años y el año que viene tendrás ${age+1} años`)