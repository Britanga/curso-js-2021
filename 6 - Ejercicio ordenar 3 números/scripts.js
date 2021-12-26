/*
Ordena 3 números de mayor a menor
A eso se le denomina Permutaciones con 3 elementos
Posibilidades 3 factorial o 3! = 3*2*1 = 6
abc - 321
acb - 312
bac - 231
bca - 132
cab - 213
cba - 123
*/

/* selecciona elementos del HTML por medio del valor del id que se le haya asignado */
const numbers = document.getElementById('numbers');
const result = document.getElementById('result');

/* Muestra msj y guarda en la variable declarada */
let a=prompt('Introduzca el primer número');
let b=prompt('Introduzca el segundo número');
let c=prompt('Introduzca el tercer número');

/* textContent propiedad q permite escribir el contenido del elemento */
numbers.textContent = `Los numeros introducidos son ${a}, ${b}, ${c}`

/* Ejercicio */

if(a>=b && a>=c){ // Si a es el mayor de los 3
    // Averiguar entre b y c cual es el mayor
    if(b>c){ // b mayor q c
        result.textContent = `El orden es: ${a}, ${b}, ${c}`
    }else{ // c mayor q b
        result.textContent = `El orden es: ${a}, ${c}, ${b}`
    }
}else if(b>=a && b>=c){ // Si b es el mayor de los 3
    // Averiguar entre a y c cual es el mayor
    if(a>c){ // a mayor q c
        result.textContent = `El orden es: ${b}, ${a}, ${c}`
    }else{ // c mayor q a
        result.textContent = `El orden es: ${b}, ${c}, ${a}`
    }
}else if(c>=a && c>=b){ // Si c es el mayor de los 3
    // Averiguar entre a y b cual es el mayor
    if(a>b){ // a mayor q b
        result.textContent = `El orden es: ${c}, ${a}, ${b}`
    }else{ // b mayor q a
        result.textContent = `El orden es: ${c}, ${b}, ${a}`
    }
}