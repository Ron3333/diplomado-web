inicio:
for(let valor = 0; valor <= 10; valor++){
    if (valor%2 !== 0){
        console.log(valor);
        // break inicio; //rompe el ciclo despues de la etiqueta go-to no es recomendable
        continue inicio
    }
    else{
        console.log(valor)
    }
}
