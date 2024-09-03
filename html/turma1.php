<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$id = $_POST['id'];

$fieldsAndValues = [
    'quantidade_de_alunos'  => '20',
    'data_de_inicio'        => '1999-12-12',
    'data_de_fim'           => '1999-12-31',
];
$IsUpdate = UpdateQuery::table('turma')
    ->set($fieldsAndValues)
    ->where('id', '=', '1')
    ->update();

var_dump($IsUpdate);