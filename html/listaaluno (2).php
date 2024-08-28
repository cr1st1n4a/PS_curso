<?php
//aaaa
use app\database\builder\SelectQuery;

require __DIR__ . '/../vendor/autoload.php';
$alunos = (array)SelectQuery::select()->from('aluno')->fetchAll();

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro e edição aluno</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="dropdown">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/index.php">Início</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lista de alunos</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Lista de aluno</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/aluno.php" class="btn btn-success">
                            <i class="fa-solid fa-plus"></i>
                            Cadastro
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-houver table-striped">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>RG</th>
                                    <th>Data de nascimento</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($alunos as $key => $value) {
                                    echo "
                                    <tr id='lna" . $value['id'] . "'>
                                        <td>" . $value['id'] . "</td>
                                        <td>" . $value['nome'] . "</td>
                                        <td>" . $value['cpf'] . "</td>
                                        <td>" . $value['rg'] . "</td>
                                        <td>" . $value['data_nascimentos'] . "</td>
                                        <td>
                                            <a href='/aluno.php?id=" . $value['id'] . "' class='btn btn-sm btn-warning'>
                                                <i class='fa-solid fa-pen-to-square'></i>
                                                Editar
                                            </a>
                                            <button type='button' class='btn btn-sm btn-danger'>
                                                <i class='fa-solid fa-trash'></i>
                                                Excluir
                                            </button>
                                        </td>
                                    </tr>
                                    ";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nome</td>
                            <td>CPF</td>
                            <td>Ação</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>WILTON WILL DE PAULO</td>
                            <td>000.000.000-00</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-outline-warning">
                                        <i class="fas fa-edit"></i>
                                        Editar</button>
                                    <button type="button" class="btn btn-outline-danger">
                                        <i class="fas fa-trash-alt"></i>
                                        Excluir</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>MARCÃO DOS VENENOS</td>
                            <td>123.123.123-12</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-outline-warning">
                                        <i class="fas fa-edit"></i>
                                        Editar</button>
                                    <button type="button" class="btn btn-outline-danger">
                                        <i class="fas fa-trash-alt"></i>
                                        Excluir</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>

</body>

</html>