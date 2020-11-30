<?php 
    include_once('cabecalho.php');
    require_once('src/autoload.php');
    require_once('src/DAO/conexao.php');

    use BancoVirtual\Web\Modelo\Conta\TipoConta;
    use BancoVirtual\Web\DAO\TipoContaDAO;

    $dao = new TipoContaDAO($conexao);

    $tiposDeContas = $dao->Listar();
?>
<h1>Tipos de Contas</h1>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Sigla</th>
            <th scope="col">Descrição</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($tiposDeContas as $tipo):?>
            <tr>
                <td><?=$tipo['nome']?></td>
                <td><?=$tipo['descricao']?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>

<?php include_once('rodape.php');?>