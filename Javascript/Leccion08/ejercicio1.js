let cuentaBancaria1 = {
    titular: 'Sofía',
    saldo: 1500,
    depositar: function(monto) {
        this.saldo += monto;
    },
    retirar: function(monto) {
        if (monto <= this.saldo) {
            this.saldo -= monto;
            return `Retiro de ${monto}. Saldo actual: ${this.saldo}`;
        } else {
            return 'Fondos insuficientes';
        }
    }
}

cuentaBancaria1.depositar(500);
console.log(cuentaBancaria1.retirar(200)); // Resultado: Retiro de 200. Saldo actual: 1800
console.log(cuentaBancaria1.retirar(2000)); // Resultado: Fondos insuficientes