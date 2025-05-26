<?php
class conexao{
    public static $instance;

        public static function getInstance(){
            try{
                self::$instance = new PDO('mysql:host=localhost;dbname=tcc', 'root', '');
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return self::$instance;
            }catch(Exception $e){
                echo "erro ao conectar banco de dados: ".$e->getMessage();
            }
        }
}
?>