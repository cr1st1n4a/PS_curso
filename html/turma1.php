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

var_dump($IsUpdate);