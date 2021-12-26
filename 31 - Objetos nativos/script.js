const button = document.getElementById('button')

/*
Objeto window - Es el objeto global, de él descienden todos los objetos
    alert()
    prompt()
    confirm()
*/

/* if (confirm('Acepta?')) {
    console.log('El usuario acepto');
} else {
    console.log('El usuario no acepto');
} */


/* Objeto console - Es el objeto que contiene la consola del navegador
    https://developer.mozilla.org/es/docs/Web/API/Console
    console.log()
    console.dir()
    console.error()
    console.table()
*/

const person = {
    name: 'Dorian',
    age: 30,
    email: 'dorian@gmail.com'
}

//console.table([1,2,3,4]) visualiza de forma + clara el indice y los valores del objeto

/* Objeto location - Es el objeto que contiene la barra de direcciones
    https://developer.mozilla.org/es/docs/Web/API/Location
    location.href
    location.protocol
    location.host
    location.pathname
    location.hash
    location.reload()
*/

// console.log(location.href)
// console.log(location.protocol)
// console.log(location.host)
// console.log(location.pathname)
// console.log(location.hash)
//location.reload()

//location.href = 'https://google.com' Forma de redirigir a traves de JS las paginas

/* Objeto history
    https://developer.mozilla.org/es/docs/DOM/Manipulando_el_historial_del_navegador

    back()
    forward()
    go(n|-n)

    length
*/

/* Objeto date
    https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Date
    https://www.w3schools.com/jsref/jsref_obj_date.asp
*/

/* const date = new Date() Para usar el objeto date es necesario instanciarlo

console.log(date) */

/*
Timers
    Timeout: https://developer.mozilla.org/en-US/docs/Web/API/WindowOrWorkerGlobalScope/setTimeout

    setTimeout(()=>{code}, delay-in-miliseconds) - Hace que se ejecute la función despues de delay. Si lo referenciamos mediante una variable/constante podemos pararlo con clearTimeout(referencia)

    Interval: https://developer.mozilla.org/en-US/docs/Web/API/WindowOrWorkerGlobalScope/setInterval

    setInterval(()=>{code}, delay-in-miliseconds) - Hace que se ejecute la función cada delay milisegundos. Si lo referenciamos mediante una variable/constante podemos pararlo con clearInterval(referencia)
*/


/* button.addEventListener('click', () => {
    //setTimeout(saludar,3000) Si usamos una función externa la sintaxis es esta
    const timeout = setTimeout(() => { Sino la sintaxis es esta
        console.log('ADIOS');
    }, 3000)
    
    clearTimeout(timeout) Ejm 1 ejecutandose a traves de un evento
}) */

/* const timeout = setTimeout(() => {
    console.log('ADIOS');
}, 3000)

button.addEventListener('click', () => {
    clearTimeout(timeout) Ejm 2 ejecutandose directamente
}) */


const saludar = () => {
    console.log('Hola')
}

let cont = 0 // contador

//const interval = setInterval(saludar, 3000) cada 3 seg ejecuta la funcion saludar

const interval = setInterval(() => { // Cuenta cada seg
    console.log(cont)
    cont++
}, 1000)

button.addEventListener('click', () => { // al hacer clic deja de contar
    clearInterval(interval)
})