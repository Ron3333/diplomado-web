
let x = true && false;
console.log(x)

let z = true || false;
console.log(z)

let y = ! true ;
console.log(y)


// ejemplo and (&&), regresa falso si cualquiera es falso
let a = 2;
let valMin = 0, valMax = 10;

if( a >= valMin && a <= valMax ) {
    console.log("dentro de rango")
}
else{
    console.log("Fuera de rango")
}


//Ejemplo or (||), regresa true si cualquiera es true
let vacaciones = false, diaDescanso = true;
if (vacaciones || diaDescanso){
    console.log("Padre puede asistir al juego")
}
else{
    console.log("El padre esta ocupado")
}

