function cuentaBancaria(titular, saldo){
    this.titular = titular;
    this.saldo = saldo;
    this.depositar = function(monto) {
        this.saldo += monto ;
        console.log(`Saldo actual del titular ${this.titular} es : ${this.saldo} `);
    };
    this.retirar = function(monto) {
        if (monto <= this.saldo) {
            this.saldo -= monto;
            return `Retiro de ${this.titular} de ${monto}: Saldo actual: ${this.saldo}`;
            //return 'Retiro de '+ monto +' Saldo actual:'+ this.saldo ;
        } else {
            return 'Fondos insuficientes';
        }
    };
}

const cuenta1 = new cuentaBancaria('Pepe', 3000);
console.log(cuenta1.retirar(500));

const cuenta2 = new cuentaBancaria('Maria', 7000);
cuenta2.depositar(200);




/*
const cuentaBancaria1 = {
    titular: 'Sofía',
    saldo: 1500,
    depositar: function(monto) {
        this.saldo += monto ;
        console.log('Saldo actual: '+this.saldo)
    },
    retirar: function(monto) {
        if (monto <= this.saldo) {
            this.saldo -= monto;
            return `Retiro de ${monto}: Saldo actual: ${this.saldo}`;
            //return 'Retiro de '+ monto +' Saldo actual:'+ this.saldo ;
        } else {
            return 'Fondos insuficientes';
        }
    }
}

cuentaBancaria1.depositar(500);
console.log(cuentaBancaria1.retirar(200)); 

console.log(cuentaBancaria1.retirar(1800)); 

cuentaBancaria1.depositar(3000);
*/

