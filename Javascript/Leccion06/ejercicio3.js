const numeros = [1, 2, 3, 4, 5];
const cuadrados = [];

for (let i = 0; i < numeros.length; i++) {
    cuadrados.push(numeros[i] ** 2);
}

console.log("Array de cuadrados:", cuadrados);