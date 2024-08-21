
var nombre = "Pepe";
var apellido = "Perez";

var nombreCompleto = nombre + apellido;
console.log(nombreCompleto);
 
var nombreCompleto2 = nombre + " " + apellido;
console.log(nombreCompleto2);

var nombreCompleto3 = "juan" + " " + "Gonzalez";
console.log(nombreCompleto3);

// Las expresiones se evaluan de izquierda a derecha

var x = nombre + 24;
console.log(x);

// contecto string si encuentra una cadena todo lo demas es cadena
var x = nombre + 2 + 4;
console.log(x);

// la prioridad es el parentisis 
var x = nombre + (2 + 4) ;
console.log(x);

var x =  2 + 4 + nombre  ;
console.log(x);


