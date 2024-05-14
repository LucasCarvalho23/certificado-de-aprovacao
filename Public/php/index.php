<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <title></title>
</head>
<body>
    

    <div class="container container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-6 container-pesquisar">

            <h3>Procure a turma que deseja pesquisar</h3>
                
                <form action="autenticacao.php?action=read" method="post">
                    <select name="filtro" id="" class="form-control">
                        <span class="input-group-text">Selecione a turma: </span>
                        <option value="">Selecione um valor</option>
                            <!-- CRIAR COM JS ou PHP -->
                        <option value="1">Front-End Iniciante</option>
                        <option value="2">Front-End Intermediário</option>
                        <option value="3">Front-End Avançado</option>
                        <option value="4">Back-End Iniciante</option>
                        <option value="5">Back-End Intermediário</option>
                        <option value="6">Back-End Avançado</option>

                    </select>
                    <div class="d-grid">
                        <button class="btn btn-primary mt-3">Pesquisar</button>
                    </div>
                </form>
            
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