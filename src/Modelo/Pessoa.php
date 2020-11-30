<?php

namespace BancoVirtual\Web\Modelo;

    class Pessoa
    {
        private $cpf;
        protected $nome;

        public function __construct(CPF $cpf, string $nome)
        {
            $this->cpf = $cpf;   
            $this->nome = $nome;
        }

        public function getNome() : string
        {
            return $this->nome;
        }

        //função feita pelo curso de POO do alura, pra exemplificar uma validação
        protected function validaNome(string $nomeTitular)
        {
            if(strlen($nomeTitular) < 5){
                echo 'O nome do titular precisa ter no minimo 5 caracteres!';
            }
        }
    }