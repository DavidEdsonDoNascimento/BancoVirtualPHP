<?php

namespace BancoVirtual\Web\Modelo;
use BancoVirtual\Web\Modelo\Pessoa;

    class Funcionario extends Pessoa
    {
        private $cargo;

        public function __construct(string $cpf, string $nome, string $cargo)
        {
            parent::__construct($cpf, $nome);
            $this->cargo = $cargo;
        }

        public function getCargo() : string
        {
            return $this->cargo;
        }
    }