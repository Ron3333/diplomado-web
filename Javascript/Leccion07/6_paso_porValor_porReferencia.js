// Paso por valor son para tipos no objecto con numerico y booleano

// 10 es un valor primitivo no posee ni propiedades ni metodos
let  x = 10;

function cambiarValor(a){
	// a esta solo e el ambito de la funcion
	a = 20;	
}

// a = x
// a = 10
// a = 20

// Paso por valor
cambiarValor(x);
console.log(x);
//console.log(a);

// Paso por referencia 

// almacena una referencia a un objeto
const persona = {
	nombre:"Pepe",
	apellido:"Perez"
}

function cambiarValorObjeto(p1){
	p1.nombre = "Carlos";
	p1.apellido = "Lara";
}

//paso por referencia
cambiarValorObjeto(persona);
console.log(persona);




