<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

header('Content-type: application/json');
$fieldsAndValues = [

    'nome'               => $_POST['nome'],
    'cpf'                => $_POST['cpf'],
    'rg'                 => $_POST['rg'],
    'data_de_nascimento' => $_POST['data_nascimento'],
];
$IsUpdate = UpdateQuery::table('aluno')
    ->set($fieldsAndValues)
    ->where('id', '=', $id)
    ->update();

$response = [];

if ($IsUpdate) {
    $response = [
        'status' => 'success',
        'msg'    => 'Dados salvos com sucesso',
        'id'     => '172'
    ];
} else {

    $response = [
        'status' => 'error',
        'msg'    => 'Rescrição',
        'id'     => '172'
    ];
}

echo json_encode($response);
