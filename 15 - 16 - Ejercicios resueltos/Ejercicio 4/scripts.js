/*
4 - Escribe un programa que pida un número entero mayor que 1 y que escriba si el número primo o no.
    Un número primo es aquel que solo es divisible por sí mismo y la unidad
*/

let num = parseInt(prompt('Introduce número mayor a 1:'))
let divisores = 0

if(num == 1) console.log('El número no es válido')
else{
    // Al conocer el n° de vueltas del bucle ya que empieza desde 2 hasta el n° q digite el usuario usaremos for
    for(let i=2; i<num; i++){
        if(num % i == 0){
            console.log(`${num} / ${i} = ${num / i} No es primo`)
            divisores++
            break
        }
    }
}

if(divisores == 0) console.log(`${num} es primo`)