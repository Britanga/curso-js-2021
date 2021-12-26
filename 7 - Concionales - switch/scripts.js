/*
Sintaxis Simple

switch(evaluación) {
    case n1: 
        //código
    break;
    
    case n2:
        //código
    break;
    default:
         //código
}

Sintaxis Múltiple

switch(evaluación) {
    case n1:
    case n2:
    case n3:
    case n4:
        //código
    break;

    case n5:
    case n6:
        //código
    break;
    default:
         //código
} 
*/

let num = 2;

// Sintaxis Simple

switch (num) { // Evalua el valor de dicha variable
    case 1: // Si es 1
        console.log(`${num} tiene el valor 1`);
        break;
    case 2: // Si es 2
        console.log(`${num} tiene el valor 2`);
        break;
    default: // Sino es ninguno
    console.log(`${num} no vale ni 1 ni 2`);
}

// Sintaxis Múltiple

switch (num) {
    case 1:
    case 3:
    case 5: // Si es 1, 3 o 5
        console.log(`${num} es impar`);
        break;
    case 2: 
    case 4: // Si es 2 o 4
        console.log(`${num} es par`);
        break;
    default: // Sino es ninguno
    console.log(`${num} no está contemplado en los casos`);
}

/* Otra sintaxis poco habitual de usar "Switch múltiple encadenado" */