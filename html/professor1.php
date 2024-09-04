<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$id = $_POST['id'];

$fieldsAndValues = [
    'nome'                => 'Paulo',
    'cpf'                 => '123.123.123-12',
    'rg'                  => '84561',
    'data_de_nascimento'  => '1999-12-12',
];
$IsUpdate = UpdateQuery::table('professor')
    ->set($fieldsAndValues)
    ->where('id', '=', '55')
    ->update();


$response = [];

if ($IsUpdate) {
    $response = [
        'status' => 'success',
        'msg'    => 'Dados salvos com sucesso',
        'id'     => '55'
    ];
} else {

    $response = [
        'status' => 'error',
        'msg'    => 'Rescrição',
        'id'     => '55'
    ];
}

echo json_encode($response);
