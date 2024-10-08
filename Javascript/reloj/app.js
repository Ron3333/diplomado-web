console.log("Reloj");

const mostrarReloj = ()=>{
	let fecha = new Date();
	//console.log(fecha);
	let hora = formatoDigCero(fecha.getHours());
	let minutos = formatoDigCero(fecha.getMinutes());
	let segundos = formatoDigCero(fecha.getSeconds());
	//console.log(minutos);
	//document.getElementById('hora').innerHTML = `${hora}: ${minutos}: ${segundos}`;
	document.getElementById('hora').innerHTML = hora+":"+minutos+":"+segundos;

	let dias = ['Domingo','Lunes', 'Martes', 'Mircoles','Jueves','Viernes','Sabado'];
	let meses =['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo','Junio', 'Julio', 'Agosto', 'Septiembre','Octubre', 'Noviembre','Diciembre'];

	let dia = fecha.getDate();
	let diaSemana = dias[fecha.getDay()];
	let mes = meses[fecha.getMonth()];
	let year = fecha.getFullYear()
	let fechaTexto = diaSemana +", "+dia+", "+mes+" del "+year;
	document.getElementById('fecha').innerHTML = fechaTexto;
	document.getElementById('contenedor').classList.toggle('animar')

}

 function formatoDigCero(digito){
    if(digito < 10){
        digito = '0' + digito;
    }
    return digito;
}

setInterval(mostrarReloj, 1000);
