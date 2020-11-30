<?php include_once('cabecalho.php'); ?>
    <h1>Cadastro de tipos de conta</h1>
    <form action="src/server-cria-tipo.php" method="post">
        <div class="row">
            <div class="col-sm-3">
                <label for="sigla">Sigla/Tipo:</label>
                <input type="text" class="form-control" name="sigla"/>
            </div>
            <div class="col-sm-9">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <input type="submit" value="Gravar" class="btn btn-primary">
        </div>
    </form>
<?php include_once('rodape.php'); ?>