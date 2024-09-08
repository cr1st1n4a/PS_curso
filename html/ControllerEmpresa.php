<?php

use app\database\builder\InsertQuery;
use app\database\builder\SelectQuery;
use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$id = $_POST['id'];
$acao = $_POST['acao'];
$nome_fantasia = $_POST['empresa_nome_fantasia'];
$cnpj = $_POST['empresa_cnpj'];
$inscricao_estadual = $_POST['empresa_inscricao_estadual'];
;
$FieldsAndValues = [
    'nome_fantasia'       => $empresa_nome_fantasia,
    'cnpj'                => $empresa_cnpj,
    'inscricao_estadual'  => $empresa_inscricao_estadual,
    'data_de_fundacao'    => $empresa_data_fundacao,
];
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
