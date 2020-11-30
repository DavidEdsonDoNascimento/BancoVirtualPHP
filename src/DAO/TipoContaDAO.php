<?php
    namespace BancoVirtual\Web\DAO;
    
    use BancoVirtual\Web\Modelo\Conta\TipoConta;

    class TipoContaDAO
    {
        private $conexao;

        public function __construct($conexao)
        {
            $this->conexao = $conexao;
        }

        public function Adicionar(TipoConta $tipo) : bool
        {
            $sql = "INSERT INTO tipo_conta(nome, descricao) VALUES ('". $tipo->getSigla() ."', '". $tipo->getDescricao() ."')";

            echo $sql;
            $response = mysqli_query($this->conexao, $sql);

            echo $response;

            return $response;
        }
        public function Listar() : array
        {
            $sql = "SELECT * FROM tipo_conta";

            $response = mysqli_query($this->conexao, $sql);

            $lista = array();

            while($r = mysqli_fetch_assoc($response))
            {
                array_push($lista, $r);
            }

            return $lista;
        }
        
    }
    
