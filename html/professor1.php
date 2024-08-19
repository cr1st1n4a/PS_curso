
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

    <form name="professor" id="professor" method="post">
        <h2>Cadastro de professor</h2>
        <!--nome do tipo Text-->
        <label for="professor_nome">Nome</label>
        <br>
        <input type="text" id="professor_nome" name="professor_nome" placeholder="Digite seu nome" />
        <br>

        <!--cpf do tipo text-->
        <label for="professor_cpf">CPF</label>
        <br>
        <input type="text" id="professor_cpf" name="professor_cpf" placeholder="Digite seu CPF" />
        <br>

        <!--rg do tipo text-->
        <label for="professor-rg">RG</label>
        <br>
        <input type="text" id="professor_rg" name="professor_rg" placeholder="Digite seu RG" />
        <br>

        <!--data de nascimento do tipo date-->
        <label for="professor_data_nascimento">Data de nascimento</label>
        <br>
        <input type="date" id="professor_data_nascimento" name="professor_data_nascimento" />
        <br>
        <button type="button" id="salvar_professor">Salvar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>                                 

</html>