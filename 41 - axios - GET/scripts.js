const button = document.getElementById('button')


// Petición con Fetch de la clase 37
//res = response = respuesta
// button.addEventListener('click', () => {
//     // Usando fetch
//     fetch('https://jsonplaceholder.typicode.com/users')
//         // Comprueba si response -> OK es true o false
//         .then(res => res.ok ? Promise.resolve(res) : Promise.reject(res))

//         // Convierte los archivos json en un objeto de JavaScript
//         .then(res => res.json())
//         // Lee los datos obtenidos del archivo json
//         .then(res => {
//             const list = document.getElementById('list') // Accediendo al id list del HTML
//             const fragment = document.createDocumentFragment() // Declarando fragmento de codigo
//             for (const userInfo of res) {
//                 const listItem = document.createElement('LI') // Creando elemento LI
//                 listItem.textContent = `${userInfo.id} - ${userInfo.name}` // Añadiendo el contenido a la etiqueta
//                 fragment.appendChild(listItem) // Añadiendo LI al fragmento de código
//             }
//             list.appendChild(fragment) // Usando el fragmento de código
//         })
// })

// Petición con axios
button.addEventListener('click', () => {
    axios({
        method: 'GET',
        url: 'https://jsonplaceholder.typicode.com/users'
    }).then(res => {
        const list = document.getElementById('list') // Accediendo al id list del HTML
        const fragment = document.createDocumentFragment() // Declarando fragmento de codigo
        for (const userInfo of res.data) {
            const listItem = document.createElement('LI') // Creando elemento LI
            listItem.textContent = `${userInfo.id} - ${userInfo.name}` // Añadiendo el contenido a la etiqueta
            fragment.appendChild(listItem) // Añadiendo LI al fragmento de código
        }
        list.appendChild(fragment) // Usando el fragmento de código
    }).catch(err => console.log(err))
})