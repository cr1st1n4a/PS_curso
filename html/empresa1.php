<?php

use app\database\builder\UpdateQuery;

require __DIR__ . '/../vendor/autoload.php';

$id = $_POST['id'];

$fieldsAndValues = [
    'nome_fantasia'       => 'empresa_nome_fantasia',
    'cnpj'                => 'empresa_cnpj',
    'inscricao_estadual'  => 'empresa_inscricao_estadual',
    'data_de_fundacao'    => '1999-12-12',
];
$IsUpdate = UpdateQuery::table('empresa')
    ->set($fieldsAndValues)
    ->where('id', '=', '1')
    ->update();

var_dump($IsUpdate);
