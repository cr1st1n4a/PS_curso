<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$disciplina = [
    'nome'    => 'sedrftgh',
    'ativo'   => 'true',
];

InsertQuery::table('disciplina')->save($disciplina);