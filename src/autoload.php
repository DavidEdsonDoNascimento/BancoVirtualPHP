<?php
    //Quando não importamos a classe o PHP vem para função autoload e tenta buscar a classe sozinho
    spl_autoload_register(function(string $nome_completo_da_classe){
        
        $caminhoArquivo = str_replace('BancoVirtual\\Web', 'src', $nome_completo_da_classe);
        $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
        $caminhoArquivo .= '.php';
        
        if(file_exists($caminhoArquivo)){
            require_once($caminhoArquivo);
        }
       
    });
