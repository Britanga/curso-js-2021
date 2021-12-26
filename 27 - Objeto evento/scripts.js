const form = document.getElementById('form')
const input = document.getElementById('input')
const button = document.getElementById('button')

/* input.addEventListener('keyup', (e) => {
    console.log(e); al soltar la tecla imprime en consola el objeto de la tecla pulsada
}) */

/* button.addEventListener('click', (e)=> {
    console.log(e.target) al hacer clic obtenemos info de target
}) */

/* const gallery = document.getElementById('gallery')

gallery.addEventListener('click', (e) => {
    e.target.classList.add('red') pinta en rojo el elemento q hagamos clic
}) */

const link = document.getElementById('link')

link.addEventListener('click', (e) => {
    e.preventDefault() // evita su comportamiento por defecto, en este caso ir a google
    
})

form.addEventListener('submit', (e) => {
    e.preventDefault() // en este caso evita q se envie el form y nos permite ver en consola el msj de console.log
    console.log('El formulario se ha enviado');
})

button.addEventListener('click', () => {
    input.value = 'Has hecho click'
})

button.click() // al recargar la pagina simula q se ha hecho clic en el boton