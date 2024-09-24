//Las funciones asíncronas son utilizadas para trabajar con operaciones que pueden tomar un tiempo 
//indeterminado en completarse, como solicitudes de red, acceso a bases de datos, etc.

let miPromesa = new Promise((resolver, rechazar) => {
	let expresion = true;
	if(expresion)
		resolver("resolvio correcto");
	else
		rechazar("se produjo un error");
   });
//prestar mucha atencion a los parentesis de la funcion flecha


function resolver(valor){
	console.log(valor);
}
function rechazar(valor){
	console.log(valor)
}

miPromesa.then( resolver, rechazar);

// miPromesa.then( 
// 	(valor) => console.log(valor), 
// 	 error => console.log(error) 
//);


miPromesa.then( (valor) => console.log(valor), error => console.log(error));

miPromesa
.then(valor => console.log(valor))
.catch(error => console.log(error));

miPromesa.then(valor => console.log(valor)).catch(error => console.log(error));

let promesa = new Promise((resolver) => {
	console.log("inicio promesa");
	setTimeout(() => resolver("saludos con promesa timeout"), 3000);
	console.log("fin promesa");
});

promesa.then( (valor) => console.log(valor))

console.log("run programa"); 