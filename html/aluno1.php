<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$fieldsAndValues = [

    'nome'               => 'Bruno',
    'cpf'                => '123.123.123-12',
    'rg'                 => '789456',
    'data_de_nascimento' => '1999-12-12',
];
$IsUpdate = UpdateQuery::table('aluno')
    ->set($fieldsAndValues)
    ->where('id', '=', '172')
    ->update();

var_dump($IsUpdate);
