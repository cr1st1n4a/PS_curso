<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$Professor = [
    'nome'                => 'sedrftgh',
    'cpf'                 => 'fghjkffv',
    'rg'                  => 'ygbuhnijk',
    'data_de_nascimento'  => '1999-12-12',
];
InsertQuery::table('Professor')->save($Professor);