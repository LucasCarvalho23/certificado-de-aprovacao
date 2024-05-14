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

            $_SESSION['nome'] = [];
            $_SESSION['nome_curso'] = [];

            if ($resultado) {
                foreach ($resultado as $turma) {
                    if ($turma['id_curso'] == $filtro && $turma['situacao'] == "aprovado") {
                        $curso = $turma['id_curso'];
                        $retorno = $consultas->readMore($curso);
                        foreach ($retorno as $aluno) {
                            if (!in_array($aluno['nome'], $_SESSION['nome'])) {
                                $_SESSION['nome'][] = $aluno['nome'];
                            }
                        }
                    }
                    $_SESSION['nome_curso'] = $retorno[0]['nome_curso'];
                    $_SESSION['nivel_curso'] = $retorno[0]['nivel_curso'];
                    $_SESSION['nome_empresa'] = $retorno[0]['nome_empresa'];
                    $_SESSION['cnpj_empresa'] = $retorno[0]['cnpj_empresa'];
                    $_SESSION['logradouro_empresa'] = $retorno[0]['logradouro_empresa'];
                    $_SESSION['numero_empresa'] = $retorno[0]['numero_empresa'];
                    $_SESSION['complemento_empresa'] = $retorno[0]['complemento_empresa'];
                    $_SESSION['bairro_empresa'] = $retorno[0]['bairro_empresa'];
                    $_SESSION['cidade_empresa'] = $retorno[0]['cidade_empresa'];
                    $_SESSION['estado_empresa'] = $retorno[0]['estado_empresa'];
                    $_SESSION['cep_empresa'] = $retorno[0]['cep_empresa'];
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