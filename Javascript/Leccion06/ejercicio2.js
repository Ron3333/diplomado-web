//Contar los elementos pares

const numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
let contadorPares = 0;

numeros.forEach(num => {
    if (num % 2 === 0) {
        contadorPares++;
    }
});

console.log("Cantidad de números pares:", contadorPares);