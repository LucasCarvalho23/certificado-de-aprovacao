<?php 

    class Consultas {

        private $conexao;
        private $turma;

        public function __construct(Conexao $conexao, Turma $turma) {
            $this->conexao = $conexao->conection();
            $this->turma = $turma;
        }

        public function read($filtro) {
            $query = 'select * from tb_turma where id_curso = :filtro';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':filtro', $filtro);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function readMore($curso) {
            $curso = $curso;
            $query = 'SELECT tb_aluno.nome, tb_aluno.documento, 
                            tb_curso.nome as nome_curso, 
                            tb_curso.nivel as nivel_curso,
                            tb_empresa.nome as nome_empresa,
                            tb_empresa.cnpj as cnpj_empresa,
                            tb_empresa.logradouro as logradouro_empresa,
                            tb_empresa.numero as cnpj_numero,
                            tb_empresa.complemento as cnpj_complemento,
                            tb_empresa.bairro as cnpj_bairro,
                            tb_empresa.cidade as cnpj_cidade,
                            tb_empresa.estado as cnpj_estado,
                            tb_empresa.cep as cnpj_cep,
                            tb_empresa.complemento as cnpj_complemento,
                            tb_curso.datainicio as datainicio_curso,
                            tb_curso.datafinal as datafinal_curso,
                            tb_curso.cargahoraria as cargahoraria_curso,
                            tb_curso.aptidao as aptidao_curso
                    FROM tb_aluno 
                    INNER JOIN tb_turma ON tb_aluno.id_aluno = tb_turma.id_aluno 
                    INNER JOIN tb_curso ON tb_turma.id_curso = tb_curso.id_curso
                    INNER JOIN tb_empresa ON tb_curso.id_empresa = tb_empresa.id_empresa
                    WHERE tb_turma.id_curso = :curso AND tb_turma.situacao = "Aprovado"';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':curso', $curso);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }

    }

?>