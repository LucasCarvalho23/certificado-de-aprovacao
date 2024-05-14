<?php 

    class Turma {

        private $filtro;
        private $curso;
        private $empresa;
        private $cnpj;
        private $endereco;
        private $dataInicio;
        private $dataFim;
        private $carga_horaria; 
        private $aptidao;
        private $aluno;
        private $documento;

        public function __get($attr) {
            return $this->$attr;
        }


        public function __set($attr, $value) {
            $this->$attr = $value;
        }

    }


?>