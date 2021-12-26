/*
    Fetch API
    Proporciona una interfaz JavaScript para acceder y manipular partes del canal HTTP, como peticiones y respuestas.
    También provee un método global fetch() que proporciona una forma fácil y lógica de obtener recursos de forma asíncrona por la red.
    Está basado en promesas, por lo cual tiene un response y un reject internos
        Response tiene varios métodos
        array​Buffer(): Archivos binarios en bruto (mp3, pdf, jpg, etc). Se utiliza cuando se necesita manipular el contenido del archivo.
        blob(): Archivos binarios en bruto (mp3, pdf, jpg, etc). Se utiliza cuando no se necesita manipular el contenido y se va a trabajar con el archivo directamente
        clone(): crea un clon de un objeto de respuesta, idéntico en todos los sentidos, pero almacenado en una variable diferente.
        form​Data(): Se utiliza para leer los objetos formData
        json(): Convierte los archivos json en un objeto de JavaScript
        text(): Se utiliza cuando queremos leer un archivo de texto. Siempre se codifica en UTF-8
        
        //Comprobación de soporte FETCH
            if (window.fetch != undefined) console.log('FETCH OK')
            else console.log('FETCH NOT WORKS!')
*/

const button = document.getElementById('button')

//res = response = respuesta
button.addEventListener('click', () => {
    // Usando fetch
    fetch('https://jsonplaceholder.typicode.com/users')
        // Comprueba si response -> OK es true o false
        .then(res => res.ok ? Promise.resolve(res) : Promise.reject(res))

        // Convierte los archivos json en un objeto de JavaScript
        .then(res => res.json())
        // Lee los datos obtenidos del archivo json
        .then(res => {
            const list = document.getElementById('list') // Accediendo al id list del HTML
            const fragment = document.createDocumentFragment() // Declarando fragmento de codigo
            for (const userInfo of res) {
                const listItem = document.createElement('LI') // Creando elemento LI
                listItem.textContent = `${userInfo.id} - ${userInfo.name}` // Añadiendo el contenido a la etiqueta
                fragment.appendChild(listItem) // Añadiendo LI al fragmento de código
            }
            list.appendChild(fragment) // Usando el fragmento de código
        })
})

/*
button.addEventListener('click', () => {
    let xhr
    if (window.XMLHttpRequest) xhr = new XMLHttpRequest()
    else xhr = new ActiveXObject("Microsoft.XMLHTTP")

    xhr.open('GET', 'https://jsonplaceholder.typicode.com/users')

    xhr.addEventListener('load', (data) => {
        const dataJSON = JSON.parse(data.target.response)

        const list = document.getElementById('list')
        for (const userInfo of dataJSON) {
            const listItem = document.createElement('LI')
            listItem.textContent = `${userInfo.id} - ${userInfo.name}`
            list.appendChild(listItem)
        }
    })

    xhr.send()
}) */