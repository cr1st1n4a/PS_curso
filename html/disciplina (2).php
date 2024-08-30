<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    

</head>

<body>
<div class="dropdown">
        <button class="btn btn-secundary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Menu de Cadastro
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="aluno1.php">Cadastro de aluno</a></li>
            <li><a class="dropdown-item" href="empresa1.php">Cadastro de empresa</a></li>
            <li><a class="dropdown-item" href="professor1.php">Cadastro de professor</a></li>
            <li><a class="dropdown-item" href="disciplina1.php">Cadastro de disciplina</a></li>
            <li><a class="dropdown-item" href="turma1.php">Cadastro de turma</a></li>
        </ul>
    </div>

    <form name="disciplina" id="disciplina" method="post">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <h1>
                            <span class="badge text-bg-secondary">
                                Cadastro de disciplina
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">
                        Campos com * são obrigatórios para o cadastro.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="disciplina_nome" name="disciplina_nome" placeholder="Insira seu nome">
                        <label for="disciplina_nome">Dgite o nome da disciplina</label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-lg btn-success">Salvar</button>
            </div>
            <div></div>
        </div>
<form name="disciplina" id="disciplina" method="post">
    
        <label for="disciplina_status">Ativo</label>
        <input type="checkbox" id="disciplina_status" name="disciplina_status" value="true"/>
        <br>

        <button type="button" id="salvar_disciplina">Salvar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </body>                                 

</html>