/*
9 - Solicitar al usuario una palabra y mostrar por consola el número de consonantes, vocales y longitud de la palabra.
*/

// toLowerCase() en dado caso escriba en mayusculas el user igual el sistema lo convertira en minusculas para comprobarlo con el if
const palabra = prompt('Introduce una palabra').toLowerCase()

let consonantes = 0
let vocales = 0

for(const letra of palabra){
    if(letra == 'a' || letra == 'e' || letra == 'i' || letra == 'o' || letra == 'u') vocales++
    else consonantes++
}

console.log(`Tu palabra tiene ${vocales} vocales, ${consonantes} consonantes y tiene un total de ${palabra.length} letras`)

// NOTA: No esta validado para evitar q el user digite números en lugar de letras