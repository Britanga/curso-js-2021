//Especificación oficial: https://developer.mozilla.org/es/docs/IndexedDB-840092-dup

// Cuando intentamos acceder a una propiedad de window y la variable se llama igual es obligatorio colocar window. o cambiar el nombre de la variable para q no de error
const indexedDB = window.indexedDB
const form = document.getElementById('form')

if (indexedDB && form) { // Si indexedDB y form existe
    let db
    const request = indexedDB.open('tasksList', 1) // Acceso a BaseDatos ('nombreBD',versión)

    request.onsuccess = () => { // Abre la BaseDatos
        db = request.result
        console.log('OPEN', db)
    }

    request.onupgradeneeded = (e) => { // Si la BaseDatos no existe la crea, sino no hace nada
        db = e.target.result
        console.log('Create', db)
        const objectStore = db.createObjectStore('tasks', { // Crea almacen de datos
            autoIncrement: true // Genera automaticamente el Key del almacen de datos
        })
    }

    request.onerror = (error) => { // Cuando hay error
        console.log('Error', error)
    }

    const addData = (data) => { // Para añadir objeto data al almacen de datos
        // Devuelve objeto de tipo transaction ([indicamos sobre cual haremos la transaccion], y cual es el modo)
        const transaction = db.transaction(['tasks'], 'readwrite')
        // Realizamos la transacción
        const objectStore = transaction.objectStore('tasks')
        // Añade los datos del objeto data al almacen tasks
        const request = objectStore.add(data)
    }

    form.addEventListener('submit', (e) => { // Para saber cuando form se ha enviado
        e.preventDefault()
        const data = { // Objeto q vamos a añadir a la BaseDatos
            taskTitle: e.target.task.value, // input de task
            taskPriority: e.target.priority.value // value del select priority
        }
        addData(data) // Ejecuta el evento q guarda los datos del objeto
    })
}