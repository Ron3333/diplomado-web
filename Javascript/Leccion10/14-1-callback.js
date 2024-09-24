function miFuncion1(){
	console.log("funcion1");
}

function miFuncion2(){
	console.log("funcion2");
}

miFuncion1();
miFuncion2();

// FUNCIONES DE TIPO CALLBACK


/* let imp = function imprimir(mensaje){
	console.log(mensaje);
} */

function imprimir(mensaje){
	console.log(mensaje);
}

function suma(op1, op2, funcionCallback){
	let res = op1 + op2;
	funcionCallback("Resultado: "+res);
}

suma(5,6, imprimir);
//suma(5,6, imp);

// la funciones callback sirve para ejecutar procesos asincronas procesos por separados.

function miFuncionCallback(){
	console.log("saludos asincronos 1 despues de 3  seg");
}

setTimeout(miFuncionCallback,3000 );
setTimeout( function(){console.log("saludos asincronos 2 despues de 4 seg")},4000);
setTimeout( () => console.log("saludos asincronos 3 despues de 2 seg"),2000);

// la funciones setInterval.

let reloj = () => { 
	let fecha = new Date();
	// template string
	console.log(`${fecha.getHours()}:${fecha.getMinutes()}:${fecha.getSeconds()}`)
}

//setInterval(reloj, 1000);

console.log("sigo");
