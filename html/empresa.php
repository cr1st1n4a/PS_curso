<?php
$id = '';
$acao = '';
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $id = $_GET['id'];
    $acao = 'e';
} else {
    $id = '';
    $acao = 'c';
};
?>
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Empresa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link href="https://cdn.datatables.net/2.1.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.1.2/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/colreorder/2.0.4/css/colReorder.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/3.0.3/css/responsive.bootstrap5.min.css" rel="stylesheet">

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
                        <a class="nav-link active" href="/listaempresa.php">Empresa</a>
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
                        <li class="breadcrumb-item"><a href="/listaempresa.php">Lista de empresas</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cadastro e edição de empresas</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Cadastro e edição de empresas</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <div class="alert alert-warning" role="alert" id="alert">
                                Todos os campos sinalizados com <span class="text-danger">*</span> são de preenchimento obrigatórios
                            </div>
                        </div>
                        <form id="form">
                            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="acao" id="acao" value="<?php echo $acao; ?>">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" placeholder="">
                                <label for="nome_fantasia">*Digite o nome fantasia por favor</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="">
                                <label for="cnpj">*Digite seu CNPJ por favor</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="inscricao_estadual" name="inscricao_estadual" placeholder="">
                                <label for="inscricao_estadual">*Digite sua Inscrição Estadual por favor</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="data_de_fundacao" name="data_de_fundacao" placeholder="">
                                <label for="data_de_fundacao">*Digite a data de fundação por favor</label>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="/listaempresa.php" class="btn btn-outline-warning">
                                <i class="fas fa-chevron-left"></i>
                                Voltar
                            </a>
                            <button type="button" class="btn btn-outline-success" id="salvar">
                                <i class="fas fa-save"></i>
                                Salvar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <script src="js/empresa.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/colreorder/2.0.4/js/dataTables.colReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.3/js/responsive.bootstrap5.js"></script>

</body>

</html>