class Egreso extends Datos{

    static contadorEgreso = 0;
    constructor(descripcion, valor){
        super(descripcion, valor);
        this._id = ++Ingreso.contadorEgreso;
    }
    get id(){
        return this._id
    }

}