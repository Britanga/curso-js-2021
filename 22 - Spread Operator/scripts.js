/*
Spread Operator (operador de expansión)

Su sintaxis es ...

*/

/* console.log(...numbers) */

//Enviar elementos en un array a una función

/* const addNumbers = (a, b, c) => {
    console.log(a+b+c)
}

let numbersToAdd = [1,2,3]

addNumbers(...numbersToAdd) ... Separa a 1 2 3 el array para q ocupen los 3 parámetros de la función*/

//Añadir un array a otro array
    /* let users = ['javier', 'david', 'rosa', 'juan', 'mercedes']

    let newUsers = ['marta', 'jaime', 'laura']

    users.push(...newUsers) con esto

    console.log(users); */

//Copiar arrays
    /* let arr1 = [1, 2, 3, 4,5]
    let arr2 = [...arr1] con esto
    console.log(arr2); */

//Concatenar arrays
    /* let arr1 = [1, 2, 3, 4, 5]
    let arr2 = [6, 7, 8]

    let arrConcat = [...arr1, ...arr2] con esto
    console.log(arrConcat) */

// Enviar un número indefinido de argumentos a una función (parámetros REST)

    /* const restParms = (...numbers) => { con esto pasamos el n° de parametros q necesitemos
        console.log(numbers)
    }

    restParms(1,2,3,4,5,6,7,8) */

//librería math
const numbers = [-12, 2, 3, 23, 43, 2, 3]

console.log(Math.max(...numbers)) // Calcula el elemento maximo del array
console.log(Math.min(...numbers)) // Calcula el elemento minimo del array

//Eliminar elementos duplicados
console.log([...new Set(numbers)])
// [...new ] para tener un array sin elementos duplicados, sino lo colocamos en vez de un array tendríamos un objeto