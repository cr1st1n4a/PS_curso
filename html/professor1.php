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

var_dump($IsUpdate);
