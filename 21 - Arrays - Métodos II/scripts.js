/* 
Arrays - Métodos II

.from(iterable) - Convierte en array el elemento iterable

.sort([callback]) - Ordena los elementos de un array alfabéticamente(valor Unicode), si le pasamos un callback los ordena en función del algoritmo que le pasemos.

.forEach(callback(currentValue, [index])) - ejecuta la función indicada una vez por cada elemento del array.

.some(callback) - Comprueba si al menos un elemento del array cumple la condición

.every(callback) - Comprueba si todos los elementos del array cumplen la condición

.map(callback) - Transforma todos los elementos del array y devuelve un nuevo array

.filter(callback) - Filtra todos los elementos del array que cumplan la condición y devuelve un nuevo array

.reduce(callback) - Reduce todos los elementos del array a un único valor
*/

/* FROM */
/* let word = 'Hola mundo'

console.log(Array.from(word)); 1era forma
console.log(word.split('')); 2da forma */


/* SORT */
/* const letters = ['b', 'c', 'z', 'a']
const numbers = [1,8,100,300,3]

console.log(letters.sort()) Ordena alfabeticamente
console.log(numbers.sort()) No funciona en números

console.log(numbers.sort((a,b)=>a-b)) De esta forma si funciona en números

Proceso interno de como funciona el .sort((a,b)=>a-b) y .sort((a,b)=>b-a)
function menorMayor(a, b) {
if (a-b < 0) return -1;
if (a-b > 0) return 1;
if(a == b) return 0;
}

function mayorMenor(a, b) {
if (b-a < 0) return -1;
if (b-a > 0) return 1;
if(b == a) return 0;
} */

/* FOREACH */ // ejecuta la función indicada una vez por cada elemento del array.
/* const numbers = [12, 25, 47, 84, 98]

//numbers.forEach((number)=>console.log(number))
numbers.forEach((number, index) =>
    console.log(`${number} está en la posición ${index}`)) */

/* SOME y EVERY */

/* const words = ['HTML', 'CSS', 'JavaScript', 'PHP']

console.log(words.some(word => word.length>10)); Comprueba si alguno cumple la condición
console.log(words.every(word => word.length>3)); Comprueba si todos cumplen la condición */

/* MAP */
/* const numbers = [1, 2, 3, 4, 5] */

/* const numbers2 = numbers.map(number => number * 2) Transforma todos los elementos del array y devuelve un nuevo array

console.log(numbers2); */

/* FILTER */

/* const numbers2 = numbers.filter(number => number > 80) Filtra todos los elementos del array que cumplan la condición y devuelve un nuevo array

console.log(numbers2)

/* REDUCE */

/* Ejemplo 1
console.log(numbers.reduce((a,b)=>a+b)) Reduce todos los elementos del array en este caso sumandolos y devolviendo un único valor

Ejemplo 2
const users = [
    {
        name: 'user 1',
        online: true
    },
    {
        name: 'user 2',
        online: true
    },
    {
        name: 'user 3',
        online: false
    },
    {
        name: 'user 4',
        online: false
    },
    {
        name: 'user 5',
        online: false
    },
    {
        name: 'user 6',
        online: true
    }
]

const usersOnline = users.reduce((cont, user) => {
    if (user.online) cont++ Sumando el N° de users online
    return cont Devuelve un unico valor
},0) Dando un valor inicial a cont con ,0 para q no de el error NaN al terminar de sumar

console.log(`Hay ${usersOnline} usuarios conectados`); Muestra el N° de users online*/