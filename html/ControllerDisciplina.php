<?php

use app\database\builder\InsertQuery;
use app\database\builder\SelectQuery;
use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$id = $_POST['id'];
$acao = $_POST['acao'];
$nome = $_POST['nome'];
$ativo = ($_POST['ativo'] == 'true') ? true : false;
$FieldsAndValues = [
    'nome' => $nome,
    'ativo' => $ativo,
];
$IsSave = false;
if ($acao == 'c') {
    $IsSave = InsertQuery::table('disciplina')->save($FieldsAndValues);
    var_dump($IsSave);
    die;
    $disciplina = (array)SelectQuery::select('id') #Passo os campos para a classo
        ->from('disciplina') #Passo para a classe Select o nome da tabela
        ->order('id', 'desc') #Pegamos o ultimo id inserido no banco de dados 
        ->fetch(); #Listamos todos os registro da tabela
    var_dump($IsSave);
    die;
    $id = $disciplina['id'];
}
if ($acao == 'e') {
    $IsSave = UpdateQuery::table('disciplina')
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
