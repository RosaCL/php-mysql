<?php
class Account{
    public int $number;
    public string $type;
    public float $saldo;

    public function __construct(int $number, string $type, float $saldo=0.00)
    {
        $this->number=$number;
        $this->type=$type;
        $this->saldo=$saldo;
    }

    public function deposit(float $amount):float{
        $this->saldo+=$amount;
        return $this->saldo;
    }

    public function retirada(float $amount):float{
        $this->saldo-=$amount;
        return $this->saldo;
    }
    public function getBalance():float{
        return $this->saldo;
    }
}
?>