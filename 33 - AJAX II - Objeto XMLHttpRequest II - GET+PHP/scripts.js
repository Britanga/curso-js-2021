// Cómo enviar datos a traves de GET

// Accede al elemento HTML
const form = document.getElementById('form')
const characters = document.getElementById('characters')
const table = document.getElementById('table')

form.addEventListener('submit', (e) => { // función de cuando se envia ese formulario
    e.preventDefault() // evita q se envie el form
    // invocando función y pasando el value del elemento seleccionado
    getData(characters.children[characters.selectedIndex].value)
})

const getData = (id) => { // Función q recibe el id q estamos buscando
    let xhr
    // Si window tiene .XMLHttpRequest Crea objeto donde se guarda la respuesta de la petición
    if (window.XMLHttpRequest) xhr = new XMLHttpRequest()
    // Sino crea objeto exclusivo para internet explorer
    else xhr = new ActiveXObject("Microsoft.XMLHTTP")

    if (id == undefined) { // Si se cumple sig q no estamos haciendo una solicitud desde el form sino q estamos cargando la pagina x 1era vez

        // Método .open para hacer una petición GET al archivo marvel.php
        xhr.open('GET', 'marvel.php')

        // Evento se dispara cuando toda la info. ha llegado al objeto
        xhr.addEventListener('load', (data) => {
            // JSON.parse Para convertir el string en formato JSON es decir en un objeto
            const dataJSON = JSON.parse(data.target.response)
            console.log(dataJSON)
        
        const fragment = document.createDocumentFragment() // Declarando fragmento de codigo

        for (const heroes of dataJSON) {
            const option = document.createElement('OPTION') // Creando elemento OPTION
            option.setAttribute('value', heroes.ID) // Asignando 'value' al OPTION
            option.textContent = heroes.Name // Añadiendo el contenido a la etiqueta
            fragment.appendChild(option) // Añadiendo OPTION al fragmento de código
        }

            characters.appendChild(fragment) // Usando el fragmento de código
        })
    } else {
        // Método .open para hacer una petición GET al archivo marvel.php recibiendo el id q estamos pasando (el id es el value)
        xhr.open('GET', `marvel.php?id=${id}`)

        xhr.addEventListener('load', (data) => {
            // JSON.parse Para convertir el string en formato JSON es decir en un objeto
            const dataJSON = JSON.parse(data.target.response)
            console.log(dataJSON)

            const fragment = document.createDocumentFragment() // Declarando fragmento de codigo

            for (const heroe of dataJSON) {
                const row = document.createElement('TR') // Creando elemento TR
                // Creando elementos TD
                const dataName = document.createElement('TD')
                const dataAlignment = document.createElement('TD')
                const dataHometown = document.createElement('TD')
                const dataGender = document.createElement('TD')
                const dataFighting = document.createElement('TD')
                // Añadiendo el contenido a las etiquetas
                dataName.textContent = heroe.Name
                dataAlignment.textContent = heroe.Alignment
                dataHometown.textContent = heroe.Hometown
                dataGender.textContent = heroe.Gender
                dataFighting.textContent = heroe.Fighting_Skills

                // Añadiendo elementos TD a la fila TR
                row.append(dataName)
                row.append(dataAlignment)
                row.append(dataHometown)
                row.append(dataGender)
                row.append(dataFighting)

                fragment.append(row) // Añadiendo TR al fragmento de código
            }

            if (table.children[1]) { // Si existe fila antigua
                table.removeChild(table.children[1]) // borra la fila antigua
            }
            table.append(fragment) // Usando el fragmento de código
        })
    }

    xhr.send() // Envía la petición
}

getData() // Invocando función