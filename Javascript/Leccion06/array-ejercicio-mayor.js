let numbers = [10, 2, 4, 5, 12, 6];
let maxNumber = numbers[0]; // Asumimos que el primer elemento es el mayor
let i = 1; // Empezamos a recorrer desde el segundo elemento

while (i < numbers.length) {
  if (numbers[i] > maxNumber) {
    maxNumber = numbers[i];
  }
  i++;
}

console.log("El número mayor es:", maxNumber);

let numbers2 = [10, 2, 4, 5, 12, 6];
let maxNumber2 = numbers[0]; // Asumimos que el primer elemento es el mayor

for (let i = 1; i < numbers2.length; i++) {
  if (numbers2[i] > maxNumber2) {
    maxNumber2 = numbers2[i];
  }
}

console.log("El número mayor es:", maxNumber);