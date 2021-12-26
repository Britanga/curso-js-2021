/* 
Atributos
    element.getAttribute('attribute')
    element.setAttribute('attribute', value)
    
Clases
    element.classList.add('class','class',...)
    element.classList.remove('class','class',...)
    element.classList.contains('class')
    element.classList.replace('oldClass', newClass)
    
    element.classList.toggle('class'[,force]) Si tiene la clase se la quita y sino se la pone
atributos directos
    id
    value
*/

// Variables q acceden a un elemento HTML a través de su id
const title = document.getElementById('title')
const name = document.getElementById('name')

//console.log(name.getAttribute('type')) Accede a cualquier atributo de la etiqueta HTML
//name.setAttribute('type','date') Modifica cualquier atributo de la etiqueta HTML

//title.classList.add('main-title','other-title') Añade clases
//title.classList.remove('title') Eliminar clases

/* if(title.classList.contains('title')) console.log('Title tiene la clase title')
else console.log('Title no tiene la clase title')
.contains Comprueba si la clase existe */

/* title.classList.replace('title','main-title') Sustituye una clase por otra*/

/* atributo directo id
console.log(title.innerHTML) .innerHTML recoge además las etiquetas html del elemento
console.log(title.textContent) .textContent solo recoge el texto */
// al validar campos del form se evalua el value no el id "name" en este caso
console.log(name.value)
/* console.log(title) Para q se vean los cambios q vamos haciendo
console.log(name) */