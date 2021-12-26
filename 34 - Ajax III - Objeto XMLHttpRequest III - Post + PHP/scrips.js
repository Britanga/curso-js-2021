// Cómo enviar datos a traves de POST

form.addEventListener('submit', (e) => { // función de cuando se envia ese formulario
    e.preventDefault() // evita q se envie el form
})

const sendData = (data) => {
    let xhr
    // Si window tiene .XMLHttpRequest Crea objeto donde se guarda la respuesta de la petición
    if (window.XMLHttpRequest) xhr = new XMLHttpRequest()
    // Sino crea objeto exclusivo para internet explorer
    else xhr = new ActiveXObject("Microsoft.XMLHTTP")

    // Método .open para hacer una petición POST al archivo marvel.php
    xhr.open('POST', 'marvel.php')

    // Creando objeto
    const formData = new formData(data)

    xhr.send(formData) // Envía la petición
}