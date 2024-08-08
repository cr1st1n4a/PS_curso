<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$FieldsAndValues = [
    'nome'               => '001',
    'cpf'                => '001',
    'rg'                 => '001',
    'data_de_nascimento' => '1955-01-10',
];
InsertQuery::table('Aluno')->save($FieldsAndValues);





