//Funcion constructor de objetos de tipo Persona
// Funcion constructor de objetos de tipo Persona

function Persona(nombre, apellido, email){
    this.nombre = nombre;
    this.apellido = apellido;
    this.email = email;
}

//al utilzar new se crea un nuevo espacio en memoria
let padre = new Persona('Juan', 'Perez', 'jperez@mail.com');
console.log( padre );

let madre = new Persona('Laura', 'Quintero', 'lquintero@mail.com');
console.log( madre );

padre.nombre = 'Carlos';

console.log( padre );
console.log( madre );