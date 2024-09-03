<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$id = $_POST['id'];

$fieldsAndValues = [
    'nome'                => 'professor_nome',
    'cpf'                 => 'professor_cpf',
    'rg'                  => 'professor_rg',
    'data_de_nascimento'  => '1999-12-12',
];
$IsUpdate = UpdateQuery::table('professor')
    ->set($fieldsAndValues)
    ->where('id', '=', '1')
    ->update();

var_dump($IsUpdate);
