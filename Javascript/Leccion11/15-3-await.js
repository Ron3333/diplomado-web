async function miFuncionPromesaYawait(){
	let miPromesa = new Promise( resolver => {
		resolver("saludos con promesa CON AWAIT");
	});	

	let ver =  await miPromesa ;
	console.log(ver);
}

miFuncionPromesaYawait();

//miFuncionPromesaYawait().then();

//promesa, await, async y seyTimeoutsync

 async function funcionPromesaAwaitTimeout(){
 	console.log("inicio promesa");
 	let miPromesa = new Promise( resolver => {
		setTimeout(()=> resolver("Promesa con await y timeout 3 seg"),3000);
	});

 	console.log( await miPromesa );
 	console.log("fin promesa");
 }

 funcionPromesaAwaitTimeout();

 console.log("Run");