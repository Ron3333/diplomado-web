let miNumero = "18";

console.log(typeof miNumero);

let edad = Number(miNumero);
//let edad = miNumero;
console.log(typeof edad);

if (edad >= 18){
    console.log("puede votar")
}
else{
    console.log("es muy joven para votar")
}


let resultado = (edad >= 18) ? "puede votar" : "no puede votar"
console.log( resultado )