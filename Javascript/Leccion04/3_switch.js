let numero = 2;

let numeroTexto = 'valor desconocido';

switch( numero ){
    case 1:
        numeroTexto = 'numero uno'
        break;
    case 2:
        numeroTexto = 'numero dos'
        break;
    case 3:
        numeroTexto = 'numero tres'
        break;
    case 4:
        numeroTexto = 'numero cuatro'
        break;
    default:
        numeroTexto = 'Caso no encontrado'
}
console.log(numeroTexto)


//el switch utiliza la comparacion estricta

//let mes = 8;
let mes = "8";
let estacion ;

switch( mes ){
    case 1: case 2: case 12:
        estacion = 'Invierno';
        break;
    case 3: case 4: case 5:
        estacion = 'primavera'
        break;
    case 6: case 7: case 8:
        estacion = 'verano'
        break;
    case 9: case 10: case 11:
        estacion = 'otoño'
        break;
    default:
        estacion = 'valor incorrecto'
}
console.log(estacion)