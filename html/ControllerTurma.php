<?php

use app\database\builder\InsertQuery;
use app\database\builder\SelectQuery;
use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$id = $_POST['id'];
$acao = $_POST['acao'];
$quantidade_de_alunos = $_POST['quantidade_alunos'];
$data_de_inicio = $_POST['data_inicio'];
$data_de_fim = $_POST['data_fim'];
;
$FieldsAndValues = [
    'quantidade_de_alunos'  => $quantidade_alunos,
    'data_de_inicio'        => $data_inicio,
    'data_de_fim'           => $data_fim,
];
$IsSave = false;
if ($acao == 'c') {
    $IsSave = InsertQuery::table('turma')->save($FieldsAndValues);
    $turma = (array)SelectQuery::select('id') #Passo os campos para a classo
        ->from('turma') #Passo para a classe Select o nome da tabela
        ->order('id', 'desc') #Pegamos o ultimo id inserido no banco de dados 
        ->fetch(); #Listamos todos os registro da tabela
    $id = $turma['id'];
}
if ($acao == 'e') {
    $IsSave = UpdateQuery::table('turma')
        ->set($FieldsAndValues)
        ->where('id', '=', $id)
        ->update();
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
            'id' => $id
        ]
    );
