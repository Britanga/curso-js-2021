/*
    Fetch API
*/

const buttonImg = document.getElementById('button-img')
const buttonPDF = document.getElementById('button-pdf')

// Viendo imagenes a traves de fetch
buttonImg.addEventListener('click', () => {
    // Petición a un recurso local con fletch
    fetch('dog.jpg')
        .then(res => res.blob()) // convierte imagen en formato blob
        .then(img => {
            // Accede al elemento img del HTML y URL.createObjectURL al pasarle un objeto en formato blob construye un link valido para visualizar ese archivo
            document.getElementById('img').src = URL.createObjectURL(img)
        })
})

// Viendo el pdf a traves de fetch
buttonPDF.addEventListener('click', () => {
    fetch('demo.pdf')
        .then(res => res.blob())
        .then(pdf => {
            document.getElementById('pdf').href = URL.createObjectURL(pdf)
        })
})