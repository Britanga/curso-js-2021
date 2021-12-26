//DOM - Crear e insertar elementos

/* 
Crear un elemento: document.createElement(element)
Escribir texto en un elemento: element.textContent = texto
Escribir HTML en un elemento: element.innerHTML = código HTML

Añadir un elemento al DOM: parent.appendChild(element)

Fragmentos de código: document.createDocumentFragment()
*/

const days = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo']

const title = document.getElementById('title')
const daysList = document.getElementById('daysList')
const selectDays = document.getElementById('daysSelect')

/* const itemList = document.createElement('LI') Creando elemento LI
itemList.textContent = 'Lunes' Escribiendo texto en el LI

daysList.appendChild(itemList) Añadiendo LI al DOM */

title.innerHTML = 'DOM - <span>Crear e insertar elementos I<span>' // Escribir HTML en un elemento

// Ejercicio de rellenar con LI's el elemento HTML ul

const fragment = document.createDocumentFragment() // Fragmento de código es un contenedor donde podemos escribir todo el HTML q queremos inyectar en el documento, así inyectamos 1 sola vez todo el código HTML, a diferencia del .innerHTML q inyecta por cada vuelta del bucle

/* for (const day of days) {
    const itemList = document.createElement('LI') Creando elemento LI
    itemList.textContent = day Escribiendo texto en el LI
    fragment.appendChild(itemList) Añadiendo LI al fragmento de código
} */

// Ejercicio de rellenar con OPTIONS el elemento HTML select

for (const day of days) {
    const selectItem = document.createElement('OPTION') // Creando elemento OPTION
    selectItem.setAttribute('value', day.toLowerCase()) // Asignando 'value' al OPTION
    selectItem.textContent = day // Añadiendo el contenido a la etiqueta
    fragment.appendChild(selectItem) // Añadiendo OPTION al fragmento de código
}

// Usando el fragmento de código
/* daysList.appendChild(fragment) */
selectDays.appendChild(fragment)