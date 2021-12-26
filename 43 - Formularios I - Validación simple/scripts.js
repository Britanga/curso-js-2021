// Accediendo a los elementos HTML
const form = document.getElementById('form')
const button = document.getElementById('submitButton')

const name = document.getElementById('name')
const email = document.getElementById('email')
const gender = document.getElementById('gender')
const terms = document.getElementById('terms')

// Creando objeto con las propiedades validas para un formulario
const formIsValid = {
    name: false,
    email: false,
    gender: false,
    terms: false
}

// Evento para evitar q el formulario se envie y llama a la funcion q valide
form.addEventListener('submit', (e) => {
    e.preventDefault()
    validateForm()
})

// change xq permite saber q han cambiado los campos independientemente de como lo han hecho
name.addEventListener('change', (e) => {
    // Si el campo esta relleno cambia a true
    if(e.target.value.trim().length > 0) formIsValid.name = true
})

email.addEventListener('change', (e) => {
    if(e.target.value.trim().length > 0) formIsValid.email = true
})

gender.addEventListener('change', (e) => {
    console.log(e.target.checked) // Solo era para comprobar un error (no hace falta)
    if(e.target.checked == true) formIsValid.gender = true
})

terms.addEventListener('change', (e) => {
    formIsValid.terms = e.target.checked
    // Al marcar los terminos el boton send del form se activara
    e.target.checked ? button.removeAttribute('disabled') : button.setAttribute('disabled', true)
})

const validateForm = () => {
    // Object.values convierte los valores del objeto en un array (funciona = con las keys)
    const formValues = Object.values(formIsValid)
    // Encuentra el index q sea = false (sino encuentra es -1)
    const valid = formValues.findIndex(value => value == false)
    // Sino encuentra false el form se envia
    if(valid == -1) form.submit()
    else alert('Form invalid')
}