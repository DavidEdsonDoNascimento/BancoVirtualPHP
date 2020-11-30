<?php

namespace BancoVirtual\Web\Modelo\Conta;

use BancoVirtual\Web\Modelo\Pessoa;
use BancoVirtual\Web\Modelo\CPF;
use BancoVirtual\Web\Modelo\Endereco;

    class Titular extends Pessoa
    {
        
        private $endereco;

        public function __construct($cpf, $nome, $endereco)
        {
            parent::__construct($cpf, $nome);
            $this->endereco = $endereco;
        }
        
        public function setNome(string $nm)
        {
            if($this->validaNome($nm)){
                $this->nome = $nm;
            }

        }
        public function getEndereco() : Endereco
        {
            return $this->endereco;
        }
        
    }