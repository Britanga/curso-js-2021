/* 
    API File
        Esta API nos sirve para leer archivos que el usuario cargue en la web. Se pueden cargar archivos desde un input de tipo file o desde el objeto DataTransfer de la API Drag&Drop.

        La interfaz más utilizada para interactuar con ella es FileReader
        https://developer.mozilla.org/es/docs/Web/API/FileReader
 */

const fileInput = document.getElementById('file')
const img = document.getElementById('img')
const images = document.getElementById('images')
const text = document.getElementById('text')

// fileInput.addEventListener('change', (e) => { // Para saber cuando cargamos un archivo
//     // Creando variables para acceder al contenido de ese archivo de texto q hemos subido
//     const file = e.target.files[0]
//     // Acceso a todas las propiedades y metodos de FileReader()
//     const fileReader = new FileReader()
//     // Lee archivo
//     fileReader.readAsText(file)
//     // Se ejecuta cuando termina de leer todo el archivo
//     fileReader.addEventListener('load', (e) => {
//         text.textContent = e.target.result // Carga el texto del archivo en el p del html
//     })
// })

//Carga simple de imagen (Lo mismo de arriba pero con imagenes)
// fileInput.addEventListener('change', (e) => {
//     const file = e.target.files[0]
//     const fileReader = new FileReader()
//     fileReader.readAsDataURL(file)
//     fileReader.addEventListener('load', (e) => {
//         img.setAttribute('src', e.target.result)
//     })
// })

//Carga múltiple de imágenes
fileInput.addEventListener('change', (e) => {
    const files = e.target.files
    const fragment = document.createDocumentFragment() // Declarando fragmento de codigo
    for (const file of files) {
        const fileReader = new FileReader() // Necesario q se cree en cada vuelta del bucle xq si esta afuera no funciona
        const img = document.createElement('IMG') // Creando elemento IMG
        fileReader.readAsDataURL(file) // lee el contenido del Blob o File especificado
        // Se ejecuta cuando termina de leer todo el archivo
        fileReader.addEventListener('load', (e) => {
            img.setAttribute('src', e.target.result) // Carga la img en el img del html
        })
        fragment.appendChild(img) // Añadiendo IMG al fragmento de código
    }
    images.appendChild(fragment) // Usando el fragmento de código
})