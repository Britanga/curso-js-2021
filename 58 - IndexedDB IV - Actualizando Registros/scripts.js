//Especificación oficial: https://developer.mozilla.org/es/docs/IndexedDB-840092-dup

// Cuando intentamos acceder a una propiedad de window y la variable se llama igual es obligatorio colocar window. o cambiar el nombre de la variable para q no de error
const indexedDB = window.indexedDB
const form = document.getElementById('form')
const tasks = document.getElementById('tasks')

if (indexedDB && form) { // Si indexedDB y form existe
    let db
    const request = indexedDB.open('tasksList', 1) // Acceso a BaseDatos ('nombreBD',versión)

    request.onsuccess = () => { // Abre la BaseDatos
        db = request.result
        console.log('OPEN', db)
        readData() // Cuando ya exista la BaseDatos muestra el contenido del almacen de datos
    }

    request.onupgradeneeded = (e) => { // Si la BaseDatos no existe la crea, sino no hace nada
        db = e.target.result
        console.log('Create', db)
        const objectStore = db.createObjectStore('tasks', { // Crea almacen de datos
            keyPath: 'taskTitle' // El key será el titulo (es más cómodo q un número)
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
        // Al añadir un objeto al almacen de datos muestra el contenido del almacen de datos
        readData()
    }

    const getData = (key) => { // Nos da la info. sobre el elemento q vamos a actualizar
        const transaction = db.transaction(['tasks'], 'readwrite')
        const objectStore = transaction.objectStore('tasks')
        const request = objectStore.get(key) // Obtenemos la key del almacen de datos

        request.onsuccess = (e) => {
            // Muestra el task y priority del elemento a actualizar en el formulario
            form.task.value = request.result.taskTitle // input de task
            form.priority.value = request.result.taskPriority // value del select priority

            form.button.dataset.action = 'update' // cambia el data-action="add" a data-action="update" del boton llamado Add Task
            form.button.textContent = 'Update Task' // cambia el nombre Add Task a Update Task
        }
    }

    const updateData = (data) => {
        const transaction = db.transaction(['tasks'], 'readwrite')
        const objectStore = transaction.objectStore('tasks')
        const request = objectStore.put(data) // .put actualiza y sino existe lo añade
        request.onsuccess = () => {
            // Al actualizar vuelve a dejar el boton en data-action="add" y nombre Add Task
            form.button.dataset.action = 'add'
            form.button.textContent = 'Add Task'
            readData() // Al actualizar muestra el contenido del almacen de datos
        }
    }

    const readData = () => {
        const transaction = db.transaction(['tasks'], 'readonly')
        const objectStore = transaction.objectStore('tasks')
        const request = objectStore.openCursor() // Para leer necesitamos un cursor, se crea
        const fragment = document.createDocumentFragment() // Declarando fragmento de codigo

        request.onsuccess = (e) => {
            const cursor = e.target.result // Guarda el resultado del cursor
            if (cursor) { // Si en el cursor hay datos q leer

                // Creando titulo de la task
                const taskTitle = document.createElement('P') // Creando elemento P en html
                taskTitle.textContent = cursor.value.taskTitle // Añadiendo el contenido a la etiqueta
                fragment.appendChild(taskTitle) // Añadiendo P al fragmento de código

                // Creando la prioridad de la task
                const taskPriority = document.createElement('P') // Creando elemento P en html
                taskPriority.textContent = cursor.value.taskPriority // Añadiendo el contenido a la etiqueta
                fragment.appendChild(taskPriority) // Añadiendo P al fragmento de código

                // Creando boton de actualizar
                const taskUpdate = document.createElement('BUTTON') // Creando elemento BUTTON en html
                taskUpdate.dataset.type = 'update' // Añadiendo data-type="update"
                taskUpdate.dataset.key = cursor.key // Añadiendo data-key="titulodeltask"
                taskUpdate.textContent = 'Update' // Añadiendo el nombre al boton
                fragment.appendChild(taskUpdate) // Añadiendo BUTTON al fragmento de código

                // Creando boton de borrar
                const taskDelete = document.createElement('BUTTON') // Creando elemento BUTTON en html
                taskDelete.textContent = 'Delete' // Añadiendo el nombre al boton
                fragment.appendChild(taskDelete) // Añadiendo BUTTON al fragmento de código

                cursor.continue() // Permite q el cursor siga leyendo mientras haya registros
            } else { // Sino hay más datos q leer
                tasks.textContent = '' // Evita q se duplique el contenido
                tasks.appendChild(fragment) // Usa el fragmento de código
            }
        }
    }

    form.addEventListener('submit', (e) => { // Para saber cuando form se ha enviado
        e.preventDefault()
        const data = { // Objeto q vamos a añadir a la BaseDatos
            taskTitle: e.target.task.value, // input de task
            taskPriority: e.target.priority.value // value del select priority
        }


        if (e.target.button.dataset.action == 'add') { // Si data-action="add"
            addData(data) // Ejecuta el evento q guarda los datos del objeto
        } else if (e.target.button.dataset.action == 'update') { // Si data-action="update"
            updateData(data) // Ejecuta el evento q actualiza los datos del objeto
        }

        form.reset() // Vacia el formulario
    })

    tasks.addEventListener('click', (e) => {
        if (e.target.dataset.type == 'update') { // Si hacemos clic en el boton de update
            getData(e.target.dataset.key) // Invoca getData y pasa como parametro la key
        }
    })
}