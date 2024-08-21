// Tipo de dato boolena (true false)

var bandera = true;
console.log(bandera);

// Tipos de datos funcion 

function miFuncion() {}
console.log(typeof miFuncion);

// Tipos de datos Symbol

var simbolo = Symbol("mi simbolo");
console.log(simbolo);
console.log(typeof simbolo);

// Tipo de dato Class

class Persona{
	constructor(nombre, apellido){
		this.nombre=nombre;
		this.apellido=apellido;
	}
}

console.log(Persona);
console.log(typeof Persona);

// tipo de dato undefined 

var x ;
//var x = undefined ;
console.log(x);
console.log(typeof x);

// Tipo de dato null = ausencia de valor

var y = null;
console.log(y);
console.log(typeof y);

// Tipo de datos arreglo o array

var auto = ["BMW", "Fiat", "Ferrari"];
console.log( auto);
console.log( auto[1]);
console.log(typeof auto);

// Tipo de dato cadena vacia 

var z = "";
console.log( "vacio ", z);
console.log(typeof z);





