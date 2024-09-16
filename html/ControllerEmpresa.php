<?php

use app\database\builder\InsertQuery;
use app\database\builder\SelectQuery;
use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$id = $_POST['id'];
$acao = $_POST['acao'];
$nome_fantasia = $_POST['nome_fantasia'];
$cnpj = $_POST['cnpj'];
$inscricao_estadual = $_POST['inscricao_estadual'];
$data_de_fundacao = $_POST['data_de_fundacao'];

$FieldsAndValues = [
    'nome_fantasia'       => $nome_fantasia,
    'cnpj'                => $cnpj,
    'inscricao_estadual'  => $inscricao_estadual,
    'data_de_fundacao'    => $data_de_fundacao,
];
var_dump($FieldsAndValues);
die;
$IsSave = false;
if ($acao == 'c') {
    $IsSave = InsertQuery::table('empresa')->save($FieldsAndValues);
    $empresa = (array)SelectQuery::select('id') #Passo os campos para a classo
        ->from('empresa') #Passo para a classe Select o nome da tabela
        ->order('id', 'desc') #Pegamos o ultimo id inserido no banco de dados 
        ->fetch(); #Listamos todos os registro da tabela
    $id = $empresa['id'];
}
if ($acao == 'e') {
    $IsSave = UpdateQuery::table('empresa')
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
