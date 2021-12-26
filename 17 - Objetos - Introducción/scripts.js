const person = {
    name: 'Juan',
    age: 26,
    sons: ['Laura', 'Diego', 'Pepe', 'Rosa', 'Tomás']
 }
 
 /* console.log(person.name); 1era forma de acceder a la propiedad de un objeto (recomendable)
 console.log(person['name']); 2da forma */
 
 /* for(const key in person){
     console.log(key); bucle para imprimir las claves
 }

 for(const key in person){
     console.log(person[key]); bucle para imprimir los valores de las claves
 } */
 
 /* ya q person.sons es un array el for of funciona, si fuera el objeto daria error
     for(const son of person.sons){
     console.log(son); bucle para imprimir los valores del array
 } */
 
 // Imprimiendo todo el objeto en forma de frase
 // .join(', ') para acceder a todos los hijos y (', ') los separa con comas c/hijo
 console.log(`Hola ${person.name}. Tienes ${person.age} años y tus hijos se llaman ${person.sons.join(', ')}`);