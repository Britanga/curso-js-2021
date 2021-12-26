/*
3 - Solicita un número e imprime todos los números pares e impares desde 1 hasta ese número con el mensaje "es par" o "es impar"
    si el número es 5 el resultado será:
        1 - es impar
        2 - es par
        3 - es impar
        4 - es par
        5 - es impar
*/

let num = parseInt(prompt('Introduzca un número:'))

// Como sabemos el N° de vueltas que dara el bucle usamos for
for(let i=1; i<=num; i++){
    if(i%2 != 0){
        console.log(`${i} - es impar`);
    }else{
        console.log(`${i} - es par`);
    }
}