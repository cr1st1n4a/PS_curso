<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$id = $_POST['id'];

$fieldsAndValues = [
    'nome_fantasia'       => 'ceu',
    'cnpj'                => '00.000.000/0000-00',
    'inscricao_estadual'  => '1651646',
    'data_de_fundacao'    => '1999-12-12',
];
$IsUpdate = UpdateQuery::table('empresa')
    ->set($fieldsAndValues)
    ->where('id', '=', '50')
    ->update();

var_dump($IsUpdate);
