<?php 

    require_once('autoload.php');
    require_once('DAO/conexao.php');    
    require_once('Modelo/Conta/TipoConta.php');
    require_once('DAO/TipoContaDAO.php');

    use BancoVirtual\Web\Modelo\Conta\TipoConta;
    use BancoVirtual\Web\DAO\TipoContaDAO;

    $sigla = $_POST['sigla'];
    $descricao = $_POST['descricao'];

    $tipoConta = new TipoConta($sigla, $descricao);
    $dao = new TipoContaDAO($conexao);

    $response = $dao->Adicionar($tipoConta);

    var_dump($response);