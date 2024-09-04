<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$id = $_POST['id'];

$fieldsAndValues = [
    'quantidade_de_alunos'  => '30',
    'data_de_inicio'        => '1999-12-12',
    'data_de_fim'           => '1999-12-31',
];
$IsUpdate = UpdateQuery::table('turma')
    ->set($fieldsAndValues)
    ->where('id', '=', '63')
    ->update();


$response = [];

if ($IsUpdate) {
    $response = [
        'status' => 'success',
        'msg'    => 'Dados salvos com sucesso',
        'id'     => '63'
    ];
} else {

    $response = [
        'status' => 'error',
        'msg'    => 'Rescrição',
        'id'     => '63'
    ];
}

echo json_encode($response);
