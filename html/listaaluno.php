<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Lista de aluno</h1>
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
<script src="js/all.min.js"></script>
</body>

</html>