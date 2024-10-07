

function calcular(){
	console.log("Estoy calculando");
	let formulario = document.forms['forma'];
	let numero1 = formulario['numero1'];
	let numero2 = formulario['numero2'];
	let operacion = formulario['operacion'];

	console.log(operacion.value);

	let resultado = 0;
	let num1 = parseFloat(numero1.value) 
	let num2 = parseFloat(numero2.value);

	if(operacion.value == "suma"){
		resultado = num1 + num2;
	}else if( operacion.value == "resta" ){
		resultado = num1 - num2;
	}else if(operacion.value == "multiplicacion"){
		resultado = num1 * num2;
	}else if(operacion.value == "dividir"){
		resultado = num1 / num2;
	}

	
	document.getElementById('resultado').innerHTML = resultado;

	
}