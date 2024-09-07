
//declaración funcion de tipo  expresion
let sumar = function(a, b){ return a + b};
resultado = sumar(3,5)
console.log(resultado);


//funcion anonima self-invoking que se llama asi mismo
(function(a, b){
    console.log('Ejecutando la funcion: ' + (a + b))
})(2, 5);


//funciones como objetos
console.log(typeof sumar);

function miFuncion(a, b){
    //numero de argumentos dentro de una funcion
    console.log(arguments.length)
    return a + b
}
miFuncion(4, 7)

//convierte la funcion a texto -> porque la funciones tienen funciones y metodos
var miFuncionTexto = miFuncion.toString();
console.log(miFuncionTexto)

