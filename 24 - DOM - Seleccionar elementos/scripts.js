/* 
document.getElementById('id') - Acceder a un elemento a través de su id

document | element .querySelector('selectorCSS') - Accede al primer elemento que coincida con el selector CSS

document | element .querySelectorAll('selectorCSS') - Accede a todos los elementos que coincidan con el selector CSS, devuelve un nodeList
*/

/* document.getElementById('id')

const title = document.getElementById('title')

title.textContent = 'DOM - Accediendo a nodos' .textContent es una propiedad q nos permite leer o editar */

/* document | element .querySelector('selectorCSS')

const paragraph = document.querySelector('.paragraph')

Si queremos acceder al span, vamos primero al padre del elemento ('title) y luego al ("span") es decir con . ir decendiendo desde el padre hasta el elemento q queramos acceder
const span = document.getElementById('title').querySelector("span") */

// document | element .querySelectorAll('selectorCSS')

const paragraphs = document.querySelectorAll('.paragraph')

// Demostrando q el nodelist no es un array aunque se comporte como uno, escribiendo CSS en linea no es la forma correcta de hacerlo pero a efectos didacticos lo usamos esta vez
paragraphs[0].style.color = 'red' // Pintando en rojo el 1er párrafo

// Demostración práctica de xq un nodelist no es un array: Al usar un .map le decimos q queremos q haga con c/u de los parrafos, pero como el .map solo funciona con arrays no sirve con nodelist. Solución: Convertir el nodelist en un array
//paragraphs.map(p => p.style.color = 'green') No funciona xq no es un array

// Convertir el nodelist en un array

//const paragraphsSpread = [...document.querySelectorAll('.paragraph')] 1era forma (El problema de Spread Operator es q no funciona 100% en todos los navegadores)

//paragraphsSpread.map(p => p.style.color = 'green') 1era forma funciona y pinta los parrafos

const paragraphsArray = Array.from(document.querySelectorAll('.paragraph')) // 2da forma

paragraphsArray.map(p=>p.style.color='blue') // 2da forma sigue funcionando