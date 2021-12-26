/* 
Crea una clase Libro
La clase libro tendrá título, autor, año y género.
Crea un método que devuelva toda la información del libro
Pide 3 libros y guárdalos en un array
Los libros se introducirán al arrancar el programa pidiendo los datos con prompt.
Validar que los campos no se introduzcan vacíos
Validar que el año sea un número y que tenga 4 dígitos
Validar que el género sea: aventuras, terror o fantasía
Crea una función que muestre todos los libros
Crea una función que muestre los autores ordenados alfabéticamente
Crea una función que pida un género y muestre la información de los libros que pertenezcan a ese género usando un el método que devuelve la información
*/

class Book { // Creando clase
    constructor(title, author, year, gender) { // Creando constructor
        this.title = title
        this.author = author
        this.year = year
        this.gender = gender
    }

    getAuthor() { // Creando getter q devuelve la propiedad author
        return this.author
    }

    getGender() { // Creando getter q devuelve la propiedad gender
        return this.gender
    }

    bookInfo() { // Método que devuelve toda la información del libro
        return `${this.title} es un libro de ${this.gender} escrito por ${this.author} en el año ${this.year}`
    }
}

let books = [] // Creamos array vacío

// Usamos while xq el problema de usar for es q tenemos q validar campos y si uno de los campos esta mal tenemos q hacer un i-- para solucionar el problema entonces while es más recomendable xq nos estamos ahorrando un else en el if
while (books.length < 3) {
    let title = prompt('Introduce el título del libro')
    let author = prompt('Introduce el autor del libro')
    let year = prompt('Introduce el año del libro')
    let gender = prompt('Introduce el género del libro').toLowerCase() // .toLowerCase() para q funcione el if

    if (title != '' &&
        author != '' &&
        !isNaN(year) && // devuelve True en el caso de q sea un número
        year.length == 4 && // tenga 4 digitos
        (gender == 'aventura' || gender == 'terror' || gender == 'fantasía')) { // Se introduce () x seguridad, devuelve True

        books.push(new Book(title, author, year, gender)) // .push para añadir el objeto Book en el array

    }
}

const showAllBooks = () => { // Creando función q muestra todos los libros
    console.log(books);
}

const showAuthors = () => { // Creando función q muestra todos los autores alfabeticamente
    let authors = [] // Creamos un array para ordenar alfabeticamente

    for (const book of books) { // Recorre todos los libros
        authors.push(book.getAuthor()); // Añade los autores al array authors
    }

    console.log(authors.sort()); // .sort() para ordenar alfabeticamente
}

const showGender = () => {
    const gender = prompt('Introduce el género a buscar')

    for (const book of books) {
        if (book.getGender() == gender) { // Si el gender es = al gender introducido
            console.log(book.bookInfo()); // Muestra c/u de los libros q sean = al gender
        }
    }

}

//showAllBooks() Invoca la función q muestra todos los libros
//showAuthors() Invoca la función q muestra todos los autores alfabeticamente
showGender() // Invoca la función q muestra c/u de los libros q sean del gender seleccionado