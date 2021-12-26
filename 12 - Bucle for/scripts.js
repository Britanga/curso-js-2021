/* Bucles */

/* 
    Determinados

    bucle for

    Su sintaxis se compone de 3 partes
        Iniciación de variable
        Número de vueltas
        Incremento o decremento

    for(let i=0;i<=10;i++){
        Código a ejecutar
    }
*/

let numbers = [56,14,23,37,41,59]

for(let i=0;i<=numbers.length;i++){
    console.log(`i vale ${i} y el valor de esa posición en el array es ${numbers[i]}`);
}

/*
    Al colocar i<=numbers.length el bucle da una vuelta extra en el array, para que de solo las vueltas del array usar i<numbers.length
*/