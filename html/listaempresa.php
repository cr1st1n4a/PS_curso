<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Empresas</title>
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
                </ul>
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
                        <li class="breadcrumb-item active" aria-current="page">Lista de Empresas</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/empresa.php" class="btn btn-outline-success">
                            <i class="fas fa-plus"></i>
                            Cadastro
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome fantasia</th>
                                    <th>CNPJ</th>
                                    <th>Inscrição Estadual</th>
                                    <th>Data de fundação</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Céu</td>
                                    <td>00 000 000/0000-00</td>
                                    <td>12312312</td>
                                    <td>15/02/1950</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/empresa.php?id=1" class="btn btn-outline-warning">
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
                                    <td>Lua</td>
                                    <td>00 000 000/0000-00</td>
                                    <td>12312312</td>
                                    <td>15/08/1959</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/empresa.php?id=2" class="btn btn-outline-warning">
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