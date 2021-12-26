/* function saludar(){ 1era forma de declarar la función
    console.log("Hola");
} */

/* const saludar = () => console.log("Hola"); 2da forma de declarar la función (manera actual)

saludar() Invocando la función

const saludarUsuario = (user) => console.log(`Hola ${user}`); misma forma usando 1 parámetro

saludarUsuario('Pepe') Invocando la función
saludarUsuario('Marta') */

/* const suma = (num1, num2) => { forma actual usando 2 parámetros
    if(num1 == 2){
        return num1+num2
    }
    console.log("Esto no se va a ejecutar si entra en el if");
    return num1
} las {} se colocan cuando hay un return
console.log(suma(7,3)); Invocando la función */

const suma = (num1, num2) => num1+num2 // forma actual usando 2 parámetros

let result = suma(3,6) // Guardamos en una variable la invocación de la función

console.log(result); // Imprimimos la variable