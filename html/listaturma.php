<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de turma</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/listaaluno.php">Aluno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/listadisciplina.php">Disciplina</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/listaempresa.php">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/listaprofessor.php">Professor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/listaturma.php">Turma</a>
                    </li>
            </div>
        </div>
    </div>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Início</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Lista de turmas</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/turma.php" class="btn btn-outline-success">
                            <i class="fas fa-plus"></i>
                            Cadastro
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Quantidade de alunos</th>
                                    <th>Data de início</th>
                                    <th>Data final</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>30</td>
                                    <td>02/02/2000</td>
                                    <td>02/12/2000</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/turma.php?id=1" class="btn btn-outline-warning">
                                                <i class="fas fa-edit"></i>
                                                Editar
                                            </a>
                                            <button type="button" class="btn btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                                Excluir
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>28</td>
                                    <td>02/02/2001</td>
                                    <td>02/12/2001</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/turma.php?id=2" class="btn btn-outline-warning">
                                                <i class="fas fa-edit"></i>
                                                Editar
                                            </a>
                                            <button type="button" class="btn btn-outline-danger">
                                                <i class="fas fa-trash"></i>
                                                Excluir
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js"></script>

</body>

</html>