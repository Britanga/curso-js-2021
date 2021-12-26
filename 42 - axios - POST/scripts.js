const button = document.getElementById('button')

// Petición con Fetch usando POST de la clase 38
// button.addEventListener('click', () => {
//     // Creando objeto
//     const newPost = {
//         title: 'A new post',
//         body: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
//         userId: 1
//     }

//     // Creando petición Fetch con POST
//     fetch('https://jsonplaceholder.typicode.com/posts', {
//         method: 'POST',
//         body: JSON.stringify(newPost),
//         headers:{
//             "Content-type": "application/json"
//         }
//     })
//         .then(res => res.json()) // Convierte los archivos json en un objeto de JavaScript
//         .then(data => console.log(data))
// })

/*  Petición con axios usando POST
En el caso de hacer inserciones POST a una API q este esperando un JSON se recomienda axios en lugar de fetch */
button.addEventListener('click', () => {
    axios({
        method: 'POST',
        url: 'https://jsonplaceholder.typicode.com/posts',
        data: {
            title: 'A new post',
            body: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            userId: 1
        }
    })
    .then(res => console.log(res.data))
    .catch(err => console.log(err))
})