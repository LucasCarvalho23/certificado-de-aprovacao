<?php 

session_start();


echo ("<pre>");
print_r($_SESSION);
echo ("</pre>");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Public/css/style.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <title></title>
</head>
<body>
    

    <div class="container container-fluid container-atestado">
        <div class="row d-flex justify-content-center row-atestado">
            <div class="col-7 logo-atestado">
                <img src="../../Public/image/logo-escudo.png">
                <h3>PORTAL ESCUDO SISTEMAS E TREINAMENTOS LTDA</h3>
                <p class="container-declaracao">Atesto para os devidos fins, que as pessoas abaixo relacionadas participam com bom aproveitamento do curso " <?php echo $_SESSION['nome_curso']; ?> - 
                <?php echo $_SESSION['nivel_curso']; ?>", referente a empresa 
                <?php echo $_SESSION['nome_empresa']; ?>, CNPJ 
                <?php echo $_SESSION['cnpj_empresa']; ?>, localizada na Rua 
                <?php echo $_SESSION['logradouro_empresa']; ?>, 
                <?php echo $_SESSION['numero_empresa']; ?>, 
                <?php echo $_SESSION['complemento_empresa']; ?>, 
                <?php echo $_SESSION['bairro_empresa']; ?>, 
                <?php echo $_SESSION['cidade_empresa']; ?>, 
                <?php echo $_SESSION['estado_empresa']; ?>, 
                <?php echo $_SESSION['cep_empresa']; ?>, promovido por este instrutor no periodo de 
                <?php echo $_SESSION['datainicio_curso']; ?> a 
                <?php echo $_SESSION['datafinal_curso']; ?> com carga horária de <?php echo $_SESSION['cargahoraria_curso']; ?> horas e estão 
                <?php echo $_SESSION['aptidao_curso']; ?></p>
                <p>Segue os nomes e dados dos alunos formados:</p>


                <!-- 

                    Criar tabela baseada no array $_SESSION['nome'][], fazendo um foreach e pegando os nomes e RGs.
                    Criar a tabela automaticamente, conforme no número de registros no $_SESSION['nome'].

                -->



            </div>
        </div>
    </div>

    <!-- script -->
    <script src="../javascript/jquery-3.7.1.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../javascript/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>