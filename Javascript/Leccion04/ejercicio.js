//usando or (||)
let mes = -9;
let estacion;

if( mes == 1 || mes == 2 || mes == 12 ){
    estacion = "invierno";
}
else if( mes == 3 || mes == 4 || mes == 5){ 
    estacion = "primavera";
}
else if(mes == 6 || mes == 7 || mes == 8){
    estacion = "verano"
}
else if(mes == 9 || mes == 10 || mes == 11){
    estacion = "otoño"
}
else{
    estacion = "valor incorrecto"
}

console.log(estacion)



//usando yes(&&)
let hora = 11.54;
let saludo

if (6 <= hora && hora <= 11.59){
    saludo = 'buenos dias'
}
else if (12 <= hora && hora <= 18.59 ){
    saludo = 'buenas tardes'
}
else if (19 <= hora && hora <= 24){
    saludo = 'buenas noches'
}
else if (0 <= hora && hora <= 6){
    saludo = 'Durmiendo'
}
else{
    saludo = 'valor incorrecto'
}
console.log(saludo)