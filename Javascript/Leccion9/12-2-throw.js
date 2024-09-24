"use strict"

let resultado = "hola"; 

try{
	//x=10;
	
	if(isNaN(resultado)) throw "No es un numero";
	else if(resultado === "") throw "Cadena vacia";
	else if(resultado >= 0) throw "valor positivo";
	else if(resultado < 0) throw "valor negativo";
}
catch(error){
	console.log(error);
	//console.log(error.name);
	//console.log(error.message);
}

console.log("continuar....");

