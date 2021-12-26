/* const getName = async () => {
    // Al usar async siempre devolvera una promesa
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve('Dorian')
        }, 1500)
    })
}

const sayHello = async () => {
    // await = Permanece bloqueado hasta que getName sea resuelto, ya que getName no se resuelve instantaneamente sino en 1.5seg necesitamos esperar hasta q pasen los 1.5 seg para imprimir en consola `Hello ${name}`
    const name = await getName()
    return `Hello ${name}`
}

sayHello().then(res=>console.log(res)) */

// Ejm práctico de la clase 36 - Promesas I
const users = [{ id: 1, name: 'Dorian' }, { id: 2, name: 'Laura' }, { id: 3, name: 'Carlos' }]
const emails = [{ id: 1, email: 'dorian@gmail.com' }, { id: 2, email: 'laura@gmail.com' }]

// Manera diferente a la clase 36 - Promesas I
const getUser = async (id) => {
    const user = users.find(user => user.id == id)
    if (!user) throw new Error(`Doesn't exist an user with id ${id}`)
    else return user
}

// Manera diferente a la clase 36 - Promesas I
const getEmail = async (user) => {
    const email = emails.find(email => email.id == user.id)
    if (!email) throw new Error(`${user.name} hasn't email`)
    else return ({
        id: user.id,
        name: user.name,
        email: email.email
    })
}

// En lugar de llamar getEmail para mostrar email creamos una funcion q muestra email y user
const getInfo = async (id) => {
    try {
        const user = await getUser(id) // await hasta q no se resuelva, no se pasa a la sig.
        const res = await getEmail(user)
        return `${user.name} email is ${res.email}`
    } catch (error) {
        console.log(error) // muestra error en caso de q haya
    }
}

// Mostramos los datos del user ingresado en este caso el 3 (username y email) que en este caso no tiene email pero el 1 y 2 si tienen y los muestra correctamente
getInfo(3).then(res => console.log(res))