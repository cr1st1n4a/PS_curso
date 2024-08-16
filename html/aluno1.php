<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1>Menu de Cadastro</h1>
    <ul>
        <li><a href="aluno1.php">Cadastro de aluno</a></li>
        <li><a href="empresa.html">Cadastro de empresa</a></li>
        <li><a href="professor.html">Cadastro de professor</a></li>
        <li><a href="disciplina.html">Cadastro de disciplina</a></li>
        <li><a href="turma.html">Cadastro de turma</a></li>
    </ul>

    <form name="aluno" id="aluno" method="post">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <h1>
                            <span class="badge text-bg-secondary">
                                Cadastro de cliente
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
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">Dgite seu email</label>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome">
                        <label for="nome">Dgite seu nome</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira seu CPF">
                        <label for="cpf">Dgite seu CPF</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="rg" name="rg" placeholder="Insira seu RG">
                        <label for="rg">Dgite seu CPF</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Insira seu Data de nascimento">
                        <label for="data_nascimento">Dgite sua data de nascimento</label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-lg btn-success">Salvar</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>

</html>