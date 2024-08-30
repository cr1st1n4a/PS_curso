<?php
#Inicia a variavel PHP id com valor nulo ou vazio
att

use app\database\builder\SelectQuery;

require __DIR__ . '/../vendor/autoload.php';

$id = '';
#Iniciamos a variavel ação que vai definir se a ação sera 
#de cadastro ou de edição
$acao = 'c';
#Verificar se existe a variavel GET id
# E verificamos se a variavel GET id é diferente de nulo
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $id = $_GET['id'];
    $acao = 'e';
   # $aluno = (array)SelectQuery::select()->from('aluno')->where('id', '=', $id)->fetch();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e edição aluno</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/index.php">Início</a>
                        </li>
                        <li class="breadcrumb-item"><a href="/listaaluno.php">Lista de alunos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Cadastro e edição de aluno
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Cadastro de aluno</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="alert alert-warning" role="alert" id="alert">
                            Todos os campos com <span class="text text-danger">*</span> são obrigatórios para o cadastro
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="form" name="form">
                            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" id="acao" name="acao" value="<?php echo $acao; ?>">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"
                                    id="nome" name="nome" placeholder=""
                                    value="<?php echo (isset($aluno['nome'])) ? $aluno['nome'] : ''; ?>">
                                <label for="nome">* Digite seu nome</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"
                                    id="cpf" name="cpf" placeholder=""
                                    value="<?php echo (isset($aluno['cpf'])) ? $aluno['cpf'] : ''; ?>">
                                <label for="cpf">* Digite seu cpf</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="rg" name="rg" placeholder="">
                                <label for="rg">* Digite seu RG</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="">
                                <label for="data_nascimento">* Digite sua data de nascimento</label>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success" id="btnsalvar">
                            <i class="fa-solid fa-floppy-disk"></i>
                            Salvar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
    <script src="/js/aluno.js"></script>
</body>

</html>