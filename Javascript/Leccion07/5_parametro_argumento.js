
// diferencia entre parametros y argumentos y parametro por default

let miFuncion = function(a = 4, b = 5)
{ 
	console.log(arguments[0]) ;
	console.log(arguments[1]) ;
	console.log(arguments[2]) ;
	return a + b ;
	//return a + b + arguments[2];
};

resultado= miFuncion();
console.log(resultado) ;

resultado= miFuncion( 3, 5);
console.log(resultado) ;

resultado= miFuncion( 3, 5 , 7);
console.log(resultado) ;

// Ejercicio

let total = sumarTodo(5, 4, 12, 7, 9);
console.log(total);

function sumarTodo(){
	let suma = 0;
	for (let i =  0 ; i < arguments.length; i++) {
		suma += arguments[i]; // suma = suma + arguments[i]
	}
	return suma;
}




