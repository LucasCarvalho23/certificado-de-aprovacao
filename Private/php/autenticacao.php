<?php 

    session_start();

    require '../../Private/php/conexao.php';
    require '../../Private/php/turma.php';
    require '../../Private/php/consultas.php';

    $action = isset($_GET['action']) ? $_GET['action'] : $action;

    if (isset($_POST['filtro']) && !empty($_POST['filtro'])) {
        if ($action == 'read') {
            $filtro = $_POST['filtro'];
            $conexao = new Conexao();
            $turma = new Turma();
            $consultas = new Consultas($conexao, $turma);
            $resultado = $consultas->read($filtro);

            $_SESSION['nome_curso'] = [];

            if ($resultado) {
                foreach ($resultado as $turma) {
                    if ($turma['id_curso'] == $filtro && $turma['situacao'] == "aprovado") {
                        $curso = $turma['id_curso'];
                        $retorno = $consultas->readMore($curso);
                        foreach ($retorno as $aluno) {
                            $_SESSION['nome'][] = $aluno['nome'];
                        }
                    }
                    $_SESSION['nome_curso'] = $retorno[0]['nome_curso'];
                    $_SESSION['nivel_curso'] = $retorno[0]['nivel_curso'];
                    $_SESSION['nome_empresa'] = $retorno[0]['nome_empresa'];
                    $_SESSION['cnpj_empresa'] = $retorno[0]['cnpj_empresa'];
                    $_SESSION['logradouro_empresa'] = $retorno[0]['logradouro_empresa'];
                    $_SESSION['cnpj_numero'] = $retorno[0]['cnpj_numero'];
                    $_SESSION['cnpj_complemento'] = $retorno[0]['cnpj_complemento'];
                    $_SESSION['cnpj_bairro'] = $retorno[0]['cnpj_bairro'];
                    $_SESSION['cnpj_cidade'] = $retorno[0]['cnpj_cidade'];
                    $_SESSION['cnpj_estado'] = $retorno[0]['cnpj_estado'];
                    $_SESSION['cnpj_cep'] = $retorno[0]['cnpj_cep'];
                    $_SESSION['datainicio_curso'] = $retorno[0]['datainicio_curso'];
                    $_SESSION['datafinal_curso'] = $retorno[0]['datafinal_curso'];
                    $_SESSION['cargahoraria_curso'] = $retorno[0]['cargahoraria_curso'];
                    $_SESSION['aptidao_curso'] = $retorno[0]['aptidao_curso'];
                    break;      
                }            
            } else {
                echo "Nenhum curso encontrado com o ID especificado.";
            }

            header('Location: ../../Public/php/atestado.php');

        }
            
    }

?>