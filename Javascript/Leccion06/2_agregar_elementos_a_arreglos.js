
let autos = ['volvo','mercedes','BMW']


autos.push('Bark') ;
console.log(autos)

//numero de elementos
console.log(autos.length);

//longitud de un arreglo
autos[autos.length] = 'cadillac'

//agregar elento con el indice
console.log(autos)

autos[6] = 'porshe';
console.log(autos)



//tipo de variables
console.log(typeof autos);

//el Array es un arreglo
console.log(Array.isArray(autos));

console.log(autos instanceof Array)