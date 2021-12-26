/*
    Fetch API
        Para hacer peticiones POST, fetch admite un segundo parámetro.
        fetch(url, {
        method: 'POST',
        body: Los datos que envíamos. Si es un objeto hay que convertirlo con JSON.stringify(datos),
        headers: {
            cabeceras de información sobre lo que estamos enviando
            https://developer.mozilla.org/es/docs/Web/HTTP/Headers
        }
    })

    console.log(newPost) // Muestra el objeto
    console.log(JSON.stringify(newPost)) // Muestra el objeto en formato JSON
*/

const button = document.getElementById('button')

button.addEventListener('click', () => {
    // Creando objeto
    const newPost = {
        title: 'A new post',
        body: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        userId: 1
    }

    // Creando petición Fetch con POST
    fetch('https://jsonplaceholder.typicode.com/posts', {
        method: 'POST',
        body: JSON.stringify(newPost),
        headers:{
            "Content-type": "application/json"
        }
    })
        .then(res => res.json()) // Convierte los archivos json en un objeto de JavaScript
        .then(data => console.log(data))
})