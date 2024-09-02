<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';


$fieldsAndValues = [
    'nome'  => 'artes',
    'ativo' => 'ativo',
];
$IsUpdate = UpdateQuery::table('disciplina')
    ->set($fieldsAndValues)
    ->where('id', '=', '1')
    ->update();