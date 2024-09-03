<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de professor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/listaaluno.php">Aluno</a>
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
                        <li class="breadcrumb-item active" aria-current="page">Lista de professor</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/professor.php" class="btn btn-outline-success">
                            <i class="fas fa-plus"></i>
                            Cadastro
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>RG</th>
                                    <th>Data Nascimento</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>WILTON WILL DE PAULO</td>
                                    <td>000.000.000-00</td>
                                    <td>12332112</td>
                                    <td>10/10/2008</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/professor.php?id=1" class="btn btn-outline-warning">
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
                                    <td>2</td>
                                    <td>Lucas Pereira Reinaldo</td>
                                    <td>000.000.000-00</td>
                                    <td>12332112</td>
                                    <td>10/10/2008</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/professor.php?id=2" class="btn btn-outline-warning">
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