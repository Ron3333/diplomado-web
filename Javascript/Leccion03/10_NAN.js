let miNumero = "18";

console.log(typeof miNumero);

let edad = Number(miNumero);
console.log(edad);

if ( isNaN(edad) ){
    console.log("no es un numero")
}
else {
    if (edad >= 18){
        console.log("puede votar")
    }
    else{
        console.log("es muy joven para votar")
    }
}

if( isNaN(edad)){
    console.log("no es u numero")
}
else{
    let resultado = (edad >= 18) ? "puede votar" : "no puede votar"
    console.log( resultado );
}

// console.log(typeof edad);





