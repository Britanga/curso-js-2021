class Persona{ // Creando la clase
    constructor(nombre, apellido, edad){ // Creando el constructor (obligatorio)
        this.nombre = nombre
        this.apellido = apellido
        this.edad = edad

        // Si queremos otra propiedad podemos agregarla y ${nombre} se puede escribir así o también ${this.nombre} xq estamos dentro del constructor
        this.datos = `Me llamo ${nombre} ${apellido} y tengo ${edad} años`
    }

    saludar(){ // Creando el método
        return `Hola, me llamo ${this.nombre} y tengo ${this.edad} años.`
    }
}

// Instanciando o creando objetos usando la clase Persona
const juan = new Persona('Juan', 'García', 25)
const marta = new Persona('Marta', 'García', 35)

console.log(juan); // Muestra el objeto juan

// Usando el método saludar en los 2 objetos
console.log(juan.saludar());
console.log(marta.saludar());