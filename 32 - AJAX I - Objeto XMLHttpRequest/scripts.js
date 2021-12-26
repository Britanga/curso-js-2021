/* Protocolo HTTP: https://es.wikipedia.org/wiki/Protocolo_de_transferencia_de_hipertexto */
/* Códigos de estado de respuesta HTTP: https://developer.mozilla.org/es/docs/Web/HTTP/Status */

const button = document.getElementById('button') // Accede al elemento HTML

// Evento q al hacer clic realiza la petición sin recargar la pagina
button.addEventListener('click', () => {
    let xhr
    // Si window tiene .XMLHttpRequest Crea objeto donde se guarda la respuesta de la petición
    if (window.XMLHttpRequest) xhr = new XMLHttpRequest()
    // Sino crea objeto exclusivo para internet explorer
    else xhr = new ActiveXObject("Microsoft.XMLHTTP")

    // Método .open para hacer una petición GET a dicho URL
    xhr.open('GET', 'https://jsonplaceholder.typicode.com/users')

    // Evento se dispara cuando toda la info. ha llegado al objeto
    xhr.addEventListener('load', (data) => {
        // JSON.parse Para convertir el string en formato JSON es decir en un objeto
        const dataJSON = JSON.parse(data.target.response)

        const list = document.getElementById('list') // Accede al elemento HTML
        for (const userInfo of dataJSON) {
            const listItem = document.createElement('LI') // Crea elemento LI en list
            listItem.textContent = `${userInfo.id} - ${userInfo.name}` // Muestra el id y name
            list.appendChild(listItem) // Añadiendo LI al DOM
        }
    })

    xhr.send() // Envía la petición
})