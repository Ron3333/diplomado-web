// Función asíncrona que utiliza async/await
async function miFuncionAsincrona() {
    // Creamos una nueva promesa
    let miPromesa = new Promise((resolver, rechazar) => {
        setTimeout(() => {
            //let expresion = Math.random() > 0.5; // Generamos una condición aleatoria
            let expresion = true; // Generamos una condición aleatoria

            if (expresion) {
                // Si la condición es verdadera, resolvemos la promesa
                resolver("Promesa resuelta exitosamente");
            } else {
                // Si la condición es falsa, rechazamos la promesa
                rechazar("Se produjo un error al resolver la promesa");
            }
        }, 1000); // Espera 1 segundo antes de ejecutar
    });

    try {
        // Esperamos a que la promesa se resuelva
        let resultado = await miPromesa;
        console.log(resultado); // Se ejecuta si la promesa se resuelve
    } catch (error) {
        console.log(error); // Se ejecuta si la promesa es rechazada
    }
}

// Llamamos a la función asíncrona
miFuncionAsincrona();