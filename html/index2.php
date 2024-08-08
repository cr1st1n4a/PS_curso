<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$turma = [
    'quantidade_de_alunos'  => '20',
    'data_de_inicio'        => '1999-12-12',
    'data_de_fim'           => '2000-02-02',
];

InsertQuery::table('turma')->save($turma);
