<?php
    namespace app\models;
    use \PDO;

    if (file_exists(__DIR__."/../../config/server.php")){
        require_once file_exists(__DIR__."/../../config/server.php");
    }
    class mainModel {
        private $server=DB_SERVER;
        private $db =DB_NAME;
        private $user = DB_USER;
        private $pass= DB_PASS;

        protected function conectar(){
            $conexion = new PDO("mysql:host=".$this->server.";dbname=".$this->db,$this->user, $this->pass);
            $conexion->exec("SET CHARACTER SET UTF-8");
            return $conexion;
        }

        protected function ejecutarConsulta($query) {
            $sql=$this->conectar()->prepare($query);
            $sql->execute();
            return $sql;
        }
    }