<?php
class Conta {
    public $titular;
    public $saldo;
    public $extrato;

    // Método construtor
    public function __construct($titular, $saldo = 0) {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->extrato = [];
    }

    // Método para saque
    public function saque($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            $this->extrato[] = 'Saque de: ' . $valor;
        } else {
            echo 'Você não tem saldo suficiente para fazer este saque' . PHP_EOL;
        }
    }

    // Método para depósito
    public function deposito($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            $this->extrato[] = 'Depósito de: ' . $valor . ' realizado com sucesso';
        } else {
            echo 'Valor inválido para depósito' . PHP_EOL;
        }
    }

    // Método para transferência
    public function transferencia($destinatario, $valor) {
        if ($this->saldo >= $valor && $valor > 0) {
            $this->saldo -= $valor;
            $destinatario->deposito($valor);
            $this->extrato[] = 'Transferência de: ' . $valor . ' para ' . $destinatario->titular;
        } elseif ($this->saldo < $valor) {
            echo 'Saldo insuficiente para realizar esta transferência' . PHP_EOL;
        } else {
            echo 'Valor inválido' . PHP_EOL;
        }
    }

    // Método para verificar extrato
    public function verificarExtrato() {
        echo 'Extrato do(a) ' . $this->titular . PHP_EOL;
        foreach ($this->extrato as $transacao) {
            echo $transacao . PHP_EOL;
        }
        echo 'Saldo atual: ' . $this->saldo . PHP_EOL;
    }
}

// Exemplo de uso
$conta1 = new Conta("João", 1000);
$conta2 = new Conta("Maria", 500);

$conta1->deposito(300);
$conta1->saque(200);
$conta1->transferencia($conta2, 400);

$conta1->verificarExtrato();
$conta2->verificarExtrato();
?>