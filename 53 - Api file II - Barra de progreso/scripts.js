const fileInput = document.getElementById('file')
const progress = document.getElementById('progress')

// Barra de progreso

// fileInput.addEventListener('change', (e) => {
//     const file = e.target.files[0]
//     const fileReader = new FileReader()
//     fileReader.readAsDataURL(file)

//     // Para controlar el progreso de la subida de un archivo
//     fileReader.addEventListener('progress', (e) => {
//         // % q lleva cargando
//         progress.style.width = Number.parseInt(e.loaded * 100 / e.total) + '%'
//     })

//     // Cuando carga en 100% lo muestra
//     fileReader.addEventListener('loadend', () => {
//         progress.style.width = '100%'
//     })
// })

const root = document.documentElement // Raiz del archivo

// Barra de progreso con CSS

fileInput.addEventListener('change', (e) => {
    const file = e.target.files[0] // Localizamos el archivo q hemos subido
    const fileReader = new FileReader() // Acceso a propiedades y metodos de FileReader()
    fileReader.readAsDataURL(file) // lee el contenido del Blob o File especificado

    fileReader.addEventListener('progress', (e) => { // Progreso de la subida de un archivo
        // % q lleva cargando
        root.style.setProperty('--bar-width', Number.parseInt(e.loaded * 100 / e.total) + '%')
    })

    fileReader.addEventListener('loadend', () => { // Cuando carga en 100% lo muestra
        root.style.setProperty('--bar-width', '100%')
    })
})