<?php 

    class Consultas {

        private $conexao;
        private $turma;

        public function __construct(Conexao $conexao, Turma $turma) {
            $this->conexao = $conexao->conection();
            $this->turma = $turma;
        }

        public function read($filtro) {
            $query = 'select * from tb_curso where id_curso = :filtro';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':filtro', $filtro);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }

?>