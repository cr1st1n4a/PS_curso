<?php

use app\database\builder\InsertQuery;
use app\database\builder\SelectQuery;

require __DIR__ . '/../vendor/autoload.php';

$id = $_POST['id'];
$acao = $_POST['acao'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$data_nascimento = $_POST['data_nascimento'];
$FieldsAndValues = [
    'nome' => $nome,
    'cpf' => $cpf,
    'rg' => $rg,
    'data_nascimento' => $data_nascimento
];
$IsSave = false;
if ($acao == 'c') {
    $IsSave = InsertQuery::table('aluno')->save($FieldsAndValues);
    $aluno = (array)SelectQuery::select('id') #Passo os campos para a classo
        ->from('aluno') #Passo para a classe Select o nome da tabela
        ->order('id', 'desc') #Pegamos o ultimo id inserido no banco de dados 
        ->fetch(); #Listamos todos os registro da tabela
    $id = $aluno['id'];
}
#Definimos que o tipo de retorno será json
header("Content-type: application/json; charset=utf-8");
echo ($IsSave == true) ?
    json_encode(
        [
            'status' => true,
            'msg' => 'Salvo com sucesso!',
            'id' => $id
        ]
    )
    :
    json_encode(
        [
            'status' => false,
            'msg' => 'Restrição: ' . $IsSave,
            'id' => 1
        ]
    );
