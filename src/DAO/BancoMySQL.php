<?php

    namespace BancoVirtual\Web\DAO;

    class BancoMySQL
    {
        private static $dbNome = 'bancovirtualphp';
        private static $dbHost = 'localhost';
        private static $dbUsuario = 'root';
        private static $dbSenha = '';

        private static $cont = null;

        public function __construct()
        {
            die('A função INIT não é permitido');
        }

        public static function conectar()
        {
            if(self::$cont == null){
                try
                {
                    self::$cont = new PDO("mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha);
                }
                catch(PDOException $ex)
                {
                    die($ex->getMessage());
                }
            }
            return self::$cont;
        }

        public static function desconectar()
        {
            self::$cont = null;
        }
    }