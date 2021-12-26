/* 
Operador ternario
(condición) ? true : false

(condición) ? 
    (primera sentencia,
    segunda sentencia)
    :
    (primera sentencia,
    segunda sentencia)
*/

let num = 3;

/* 1era forma con if */
/* if(num % 2 == 0) console.log(`${num} es par`);
else console.log(`${num} es impar`); */

/* 2da forma con Operador ternario (recomendable xq consume menos recurso) */
(num % 2 == 0) ? console.log(`${num} es par`) : console.log(`${num} es impar`);

/* 3era forma con Operador ternario con varias sentencias */
(num % 2 == 0) ? 
    (
        console.log(`${num} es par`),
        console.log(`${num} es par 2`)
    )
     : 
    (
        console.log(`${num} es impar`),
        console.log(`${num} es impar 2`)
    )