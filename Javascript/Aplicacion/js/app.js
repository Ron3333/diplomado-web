let contadorIngreso = 0;

function Ingreso(descripcion, valor){
    this.descripcion = descripcion;
    this.valor = valor;
    this.id = ++contadorIngreso;
}

let contadorEgreso = 0;

function Egreso(descripcion, valor){
    this.descripcion = descripcion;
    this.valor = valor;
    this.id = ++contadorEgreso;
} 

const ingresos = [
    new Ingreso('Salario', 2100.0),
    new Ingreso('Venta', 5000.00),
    new Ingreso('Venta2', 5000.00)
];

const egresos = [
    new Egreso('Renta departamento', 900.00),
    new Egreso('Ropa', 200.00)
];


let cargaApp= () => {
    cargarCabecera();
    cargarIngreso();
    cargarEgreso();
}

let totalIngreso = () => {
    let totalIngreso = 0;
    for( let ingreso of ingresos){
        totalIngreso += ingreso.valor;
    }
    return totalIngreso;
}

let totalEgreso = () => {
    let totalEgreso = 0;
    for( let egreso of egresos){
        totalEgreso += egreso.valor;
    }
    return totalEgreso;
}

console.log("Total de ingreso : "+totalEgreso());

let cargarCabecera = () => {
    let presupuesto = totalIngreso() - totalEgreso();
    let porcentajeEgreso = totalEgreso()/totalIngreso();
    console.log("Porcentaje Egreso: "+porcentajeEgreso);
    document.getElementById('presupuesto').innerHTML = formatoMoneda(presupuesto);
    document.getElementById('porcentajeEgreso').innerHTML = formatoPorcentaje(porcentajeEgreso);
    document.getElementById('ingreso').innerHTML = formatoMoneda(totalIngreso());
    document.getElementById('egreso').innerHTML = formatoMoneda(totalEgreso());

}

/* Start: Funciones de Ingresos */

const cargarIngreso = () =>{
    let ingresoHTML = '';
    for(let ingreso of ingresos){
        ingresoHTML += crearIngresoHTML(ingreso);
    }
    document.getElementById('lista-ingreso').innerHTML = ingresoHTML;
}

const crearIngresoHTML = (ingreso) =>{
    let ingresoHTML = `
        <li class="list-group-item d-flex justify-content-between align-items-center">
             ${ingreso.descripcion}
            <div>
                <span class="badge text-bg-primary rounded-pill">${formatoMoneda(ingreso.valor)}</span>
                <span class="badge text-bg-danger rounded-pill" onclick='eliminarIngreso(${ingreso.id})' >X</span>
            </div>
        </li> `;
    return ingresoHTML;
}

const eliminarIngreso = (id)=>{
    let indiceEliminar = ingresos.findIndex(ingreso => ingreso.id === id);
    ingresos.splice(indiceEliminar, 1);
    cargarCabecera();
    cargarIngreso();
}

/* End: Funciones de Ingresos */

/* Start: Funciones de Egresos */

const cargarEgreso = () =>{
    let ingresoHTML = '';
    for(let egreso of egresos){
        ingresoHTML += crearEgresoHTML(egreso);
    }
    document.getElementById('lista-egreso').innerHTML = ingresoHTML;
}

const crearEgresoHTML = (egreso) =>{
    let ingresoHTML = `
        <li class="list-group-item d-flex justify-content-between align-items-center">
             ${egreso.descripcion}
            <div>
                <span class="badge text-bg-primary rounded-pill">- ${formatoMoneda(egreso.valor)}</span>
                <span class="badge text-bg-danger rounded-pill"  onclick='eliminarEgreso(${egreso.id})' >X</span>
            </div>
        </li> `;
    return ingresoHTML;
}

const eliminarEgreso = (id)=>{
    let indiceEliminar = egresos.findIndex(egreso => egreso.id === id);
    egresos.splice(indiceEliminar, 1);
    cargarCabecera();
    cargarEgreso();
}

/* End: Funciones de Egresos */

let agregarDato = () => {
    console.log('Agregar Dato');
    let forma = document.forms['forma'];
    let tipo = forma['tipo'];
    let descripcion = forma['descripcion'];
    let valor = forma['valor'];
    if(descripcion.value !== ''  &&  valor.value !== ''){
        if(tipo.value === 'ingreso'){
            ingresos.push( new Ingreso(descripcion.value, Number(valor.value)));
            //ingresos.push( new Ingreso(descripcion.value, +valor.value));//+valor.value convierte a un valor numerico de forma automatica como Number
            cargarCabecera();
            cargarIngreso();
        }else if(tipo.value === 'egreso'){
            egresos.push( new Egreso(descripcion.value, Number(valor.value)));
            cargarCabecera();
            cargarEgreso();
        }
    }
    document.getElementById('descripcion').value = '';
    document.getElementById('valor').value = '';
    
}

/* Funciones utilitarias */
/* toLocaleString() -> https://www.w3schools.com/jsref/jsref_tolocalestring_number.asp*/

const formatoMoneda = (valor) => {
    return valor.toLocaleString('en-US', {style:'currency', currency:'USD', minimumFractionDigits:1});
 }
 
 const formatoPorcentaje = (valor) => {
     if(isNaN(valor) || valor == 'Infinity'){
         valor =  0 ;
     }
     return valor.toLocaleString('en-US',{style:'percent',minimumFractionDigits:2})
 }
