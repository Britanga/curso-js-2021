// Un callback es una función que se ejecuta a través de otra función
// Los callbacks no son asincronos

// Ejm 1 de callback q devuelve el nombre de usuario
// const getUser = (id, cb) => {
//     const user = {
//         name : 'Jesus',
//         id : id // Se puede omitir y usar solo un id ya q se llama = al parametro
//     }
//     // callback
//     if (id==2) cb('User not exist')
//     else cb(null, user)
// }

// getUser(1, (err, user) => {
//     if(err) return console.log(err)
//     console.log(`User name is ${user.name}`);
// })

// Ejm 2 de callback q devuelve el email y usuario
const users = [
    {
        id: 1,
        name: 'Jesus'
    },
    {
        id: 2,
        name: 'Laura'
    },
    {
        id:3,
        name: 'Carlos'
    }
]

const emails = [
    {
        id: 1,
        email: 'jesus@gmail.com'
    },
    {
        id: 2,
        email: 'laura@gmail.com'
    }
]

const getUser = (id, cb) => {
    const user = users.find(user => user.id == id)
    if (!user) cb(`Not exist a user with id ${id}`)
    else cb(null, user)
}

const getEmail = (user, cb) => {
    const email = emails.find(email => email.id == user.id)
    if (!email) cb(`${user.name} hasn´t email`)
    else cb(null, {
        id: user.id,
        name: user.name,
        email: email.email
    })
}

// Usando un callback dentro de otro q devuelve el user y email
getUser(3, (err, user) => {
    if (err) return console.log(err)
    getEmail(user, (err, res) => {
        if (err) return console.log(err)
        console.log(res);
    })
})