/*
5 - Escriba un programa que pida un número entero mayor que cero y calcule su factorial.
    El factorial es el resultado de multiplicar ese número por sus anteriores hasta la unidad.

    !5 = 5*4*3*2*1 = 120
*/

let num = parseInt(prompt('Introduzca un número mayor a 0'))
let result = 1

if(num == 0) console.log('El número no es válido')
else{
    for(let i=num; i>1; i--){ // Que siga el bucle mientras i>1
        result *= i
    }
}

if(num != 0) console.log(`El factorial de ${num} es ${result}`)