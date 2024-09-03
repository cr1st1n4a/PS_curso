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

var_dump($IsUpdate);