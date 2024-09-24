// async indica que una funcion regresa una promesa

async function miFuncionPromesa(){
	return "saludos con promesa async";
}

miFuncionPromesa().then(valor => console.log(valor));


/* async function miFuncionPromesa2(){
	return {"a":2, "b":3};
}

miFuncionPromesa2().then( valor  => console.log(valor.a+" y " + valor.b ));


async function miFuncionPromesa3(){
	let saludos = await "saludos con promesa async";
	console.log(saludos);
}

miFuncionPromesa3() */
 