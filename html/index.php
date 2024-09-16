<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link href="https://cdn.datatables.net/2.1.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.1.2/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/colreorder/2.0.4/css/colReorder.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/3.0.3/css/responsive.bootstrap5.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.php">Início</a>
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
                        <a class="nav-link" href="/listaturma.php">Turma</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="img/aluno.png" class="card-img-top" alt="Alunos">
                    <div class="card-body">
                        <h5 class="card-title">Alunos</h5>
                        <a href="/listaaluno.php" class="btn btn-primary me-2" role="button">Lista de Alunos</a>
                        <a href="/aluno.php" class="btn btn-secondary" role="button">Cadastro de Alunos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="img/professor.png" class="card-img-top" alt="Professores">
                    <div class="card-body">
                        <h5 class="card-title">Professores</h5>
                        <a href="/listaprofessor.php" class="btn btn-primary me-2" role="button">Lista de Professores</a>
                        <a href="/professor.php" class="btn btn-secondary" role="button">Cadastro de Professores</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="img/turma.png" class="card-img-top" alt="Turmas">
                    <div class="card-body">
                        <h5 class="card-title">Turmas</h5>
                        <a href="/listaturma.php" class="btn btn-primary me-2" role="button">Lista de Turmas</a>
                        <a href="/turma.php" class="btn btn-secondary" role="button">Cadastro de Turmas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="img/disciplina.png" class="card-img-top" alt="Disciplinas">
                    <div class="card-body">
                        <h5 class="card-title">Disciplinas</h5>
                        <a href="/listadisciplina.php" class="btn btn-primary me-2" role="button">Lista de Disciplinas</a>
                        <a href="/disciplina.php" class="btn btn-secondary" role="button">Cadastro de Disciplinas</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="img/empresa.png" class="card-img-top" alt="Empresas">
                    <div class="card-body">
                        <h5 class="card-title">Empresas</h5>
                        <a href="/listaempresa.php" class="btn btn-primary me-2" role="button">Lista de Empresas</a>
                        <a href="/empresa.php" class="btn btn-secondary" role="button">Cadastro de Empresas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/2.1.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/colreorder/2.0.4/js/dataTables.colReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.3/js/responsive.bootstrap5.min.js"></script>
    <script src="/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="js/disciplina.js"></script>
</body>

</html>
