<?php

class Conta
{
    public $titular;
    public $saldo;
    public $extrato;
    public function __construct($titular, $saldo=0)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->extrato = array();
    }
    public function saque($valor){
        if ($valor <= $this->saldo){
            $this->saldo -= $valor;
            $this->extrato[] = array('valor' => $valor, 'operacao' => 'saque');
        }
        else{
            echo "Saldo insuficiente";
        }
    }
    public function deposito($valor){
        if ($valor > 0){
            $this->saldo += $valor;
            $this->extrato[] = array('valor' => $valor, 'operacao' => 'deposito');
        }
        else{
            echo "Valor inválido";
        }
    }
    public function transferencia($destino, $valor){
        if ($this->saldo >= $valor && $valor > 0){
            $this->saldo -= $valor;
            $this->extrato[] = array('valor' => $valor, 'operacao' => 'transferencia');
            $destino->deposito($valor);
        }
        else if ($this->saldo < $valor){
            echo "Saldo insuficiente";
        }
        else{
            echo "Valor inválido";
        }
    }
    public function verificarExtrato(){
        echo "Extrato do(a) {$this->titular}:\n";
        foreach ($this->extrato as $extrato){
            echo "{$extrato['operacao']} de {$extrato['valor']}\n";
        }
        echo "Saldo Atual: {$this->saldo}\n";
    }

}

$conta1 = new Conta("João", 1000);
$conta2 = new Conta("Maria", 500);

$conta1->deposito(300);
$conta1->saque(200);
$conta1->transferencia($conta2, 400);

$conta1->verificarExtrato();
// $conta2->verificarExtrato();
?>
