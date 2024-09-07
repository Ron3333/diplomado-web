let persona = {
    nombre: 'Juan',
    apellido: 'Perez',
    email: 'jperez@mail.com',
    edad: 28,
    nombreCompleto: function(){
        return this.nombre + ' ' + this.apellido;
    }
}

persona.tel = '55443322';
persona.tel = '44332211';

console.log( persona );

delete persona.tel;

console.log(persona.nombreCompleto());

console.log( persona );

//Concatenar cada valor de cada propiedad
console.log( persona.nombre + ', ' + persona.apellido);

//for in
for( nombrePropiedad in persona){
    console.log( persona[nombrePropiedad]);
    //console.log( nombrePropiedad + ":" +persona[nombrePropiedad]);
}

// Muestra todos los valores lo convierte en un array o arreglo
let personaArray = Object.values( persona );
console.log( personaArray );

// el objeto lo convierte en cadena
let personaString = JSON.stringify( persona );
console.log( personaString );