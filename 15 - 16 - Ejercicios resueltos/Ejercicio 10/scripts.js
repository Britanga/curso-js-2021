/*
10 - Dado un array que contiene ["azul", "amarillo", "rojo", "verde", "rosa"] determinar si un color introducido por el usuario a través de un prompt se encuentra dentro del array o no.
*/

const colors = ["azul", "amarillo", "rojo", "verde", "rosa"]

const color = prompt('Introduce un color: ').toLowerCase()

// Usando operador ternario y colors.indexOf(color) != -1 significa q si existe
// .indexOf() - Devuelve el primer índice del elemento que coincida con el valor especificado, o -1 si ninguno es encontrado.
colors.indexOf(color) != -1 ? console.log('Se encuentra en el array') : console.log('Indefinido')