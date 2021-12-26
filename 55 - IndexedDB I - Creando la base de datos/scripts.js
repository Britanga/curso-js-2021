// Cuando intentamos acceder a una propiedad de window y la variable se llama igual es obligatorio colocar window. o cambiar el nombre de la variable para q no de error
const indexedDB = window.indexedDB // Variable para almacenar el acceso a indexedDB

if (indexedDB) { // Si indexedDB existe
    let db
    const request = indexedDB.open('tasksList', 1) // Acceso a BaseDatos ('nombreBD',versión)

    request.onsuccess = () => { // Abre la BaseDatos
        db = request.result
        console.log('OPEN', db)
    }

    request.onupgradeneeded = () => { // Si la BaseDatos no existe la crea, sino no hace nada
        db = request.result
        console.log('Create', db)
        const objectStore = db.createObjectStore('tasks') // Crea almacen de datos
    }

    request.onerror = (error) => { // Cuando hay error
        console.log('Error', error)
    }
}