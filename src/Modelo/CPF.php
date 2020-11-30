<?php

namespace BancoVirtual\Web\Modelo;

    class CPF
    {
        private $numero;

        public function __construct(string $numero)
        {
            $this->numero = $numero;
        }

        public function getCPF() : string 
        {
            return $this->numero;
        }
    }