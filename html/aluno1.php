<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$fieldsAndValues = [

    'nome'               => 'aluno_nome',
    'cpf'                => 'aluno_cpf',
    'rg'                 => 'aluno_rg',
    'data_de_nascimento' => '1999-12-12',
];
$IsUpdate = UpdateQuery::table('aluno')
    ->set($fieldsAndValues)
    ->where('id', '=', '1')
    ->update();

var_dump($IsUpdate);
