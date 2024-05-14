<?php 

    class Conexao {

        private $host = 'localhost';
        private $dbname = 'db_evolke';
        private $user = 'root';
        private $password = '';

        public function conection() {
            $conection = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname", 
                "$this->user",
                "$this->password"
            );
            return $conection;
        }

    }

?>