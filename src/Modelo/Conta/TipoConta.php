<?php
    namespace BancoVirtual\Web\Modelo\Conta;

    class TipoConta
    {
        private $sigla;
        private $descricao;

        public function __construct(string $sigla, string $descricao)
        {
            $this->sigla = $sigla;
            $this->descricao = $descricao;
        }

        public function getSigla() : string
        {
            return $this->sigla;
        }
        public function getDescricao() : string
        {
            return $this->descricao;
        }
    }
	
	