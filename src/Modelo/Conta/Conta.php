<?php

namespace BancoVirtual\Web\Modelo\Conta;

    class Conta 
    {
        private $titular;
        private $saldo;
        private static $numero_de_contas = 0;

        public function __construct(Titular $titular)
        {
            $this->titular = $titular;
            $this->saldo = 0;
            self::$numero_de_contas++; //sempre que é criada uma conta é somada +1 em um atributo statico
        }

        public function getSaldo() : float
        {
            return $this->saldo;
        }
        
        public function depositar(float $valor) : boolean
        {
            if($valor > 0 ){
                $this->saldo += $valor;
                return true;
            }
            return false;
        }
        public function sacar(float $valor) : boolean
        {
            if($valor > 0 && $this->getSaldo() >= $valor){
                $this->saldo -= $valor;
                return true;
            }
            return false;
        }
    }