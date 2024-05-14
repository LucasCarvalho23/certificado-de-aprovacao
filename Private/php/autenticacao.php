<?php 

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

            if ($resultado) {
                foreach ($resultado as $curso) {
                    if ($curso['id_curso'] == $filtro) {
                        echo $curso['nome'];
                        echo (" ". $curso['nivel']); 
                    }

                    
                    
                }
            } else {
                echo "Nenhum curso encontrado com o ID especificado.";
            }
            
        }
    }

?>