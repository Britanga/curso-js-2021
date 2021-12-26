const pendingTasks = document.getElementById('pending-tasks')
const finishedTasks = document.getElementById('finished-tasks')
//dataTransfer
//setData: Establece la información que queremos compartir
//getData: Establece la información que queremos obtener
// Se dispara al comenzar a arrastrar
pendingTasks.addEventListener('dragstart', (e) => {
    e.dataTransfer.setData('text/plain', e.target.id)
})

// Se dispara mientras arrastramos
pendingTasks.addEventListener('drag', (e) => {
    e.target.classList.add('active') // Al arrastrar se añade los estilos css
})

// Se dispara cuando soltamos el objeto
pendingTasks.addEventListener('dragend', (e) => {
    e.target.classList.remove('active') // Al soltar se quita los estilos css
})

//OBLIGATORIO, SI NO, NO FUNCIONA
// Se dispara cuando el objeto se mueve sobre la zona de destino
finishedTasks.addEventListener('dragover', (e) => {
    e.preventDefault()
})

// Se dispara cuando soltamos el objeto en la zona de destino
finishedTasks.addEventListener('drop', (e) => {
    e.preventDefault()
    // Guarda el id del elemento q vamos a mover
    const element = document.getElementById(e.dataTransfer.getData('text'))
    element.classList.remove('active') // Al soltar se quita los estilos css
    // Elimina de pendingTasks el element y lo añade en finishedTasks
    finishedTasks.appendChild(pendingTasks.removeChild(element))
})