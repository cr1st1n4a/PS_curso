<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$id = $_POST['id'];

$fieldsAndValues = [
    'nome'  => 'artes',
    'ativo' => 'false',
];
$IsUpdate = UpdateQuery::table('disciplina')
    ->set($fieldsAndValues)
    ->where('id', '=', '49')
    ->update();

$response = [];

if ($IsUpdate) {
    $response = [
        'status' => 'success',
        'msg'    => 'Dados salvos com sucesso',
        'id'     => '49'
    ];
} else {

    $response = [
        'status' => 'error',
        'msg'    => 'Rescrição',
        'id'     => '49'
    ];
}

echo json_encode($response);
