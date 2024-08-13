

<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';


$turmaA = [
    'quantidade_de_alunos'  => '30',
    'data_de_inicio'        => '1999-02-06',
    'data_de_fim'           => '1999-12-05',
];

$IsSave = InsertQuery::table('turma')->save($turmaA);

$turmab = [
    'quantidade_de_alunos'  => '29',
    'data_de_inicio'        => '1999-02-06',
    'data_de_fim'           => '1999-12-05',
];

$IsSave = InsertQuery::table('turma')->save($turmab);

$turmac = [
    'quantidade_de_alunos'  => '31',
    'data_de_inicio'        => '1999-02-06',
    'data_de_fim'           => '1999-12-05',
];

$IsSave = InsertQuery::table('turma')->save($turmac);

$turmad = [
    'quantidade_de_alunos'  => '28',
    'data_de_inicio'        => '1999-02-06',
    'data_de_fim'           => '1999-12-05',
];

$IsSave = InsertQuery::table('turma')->save($turmad);

if ($IsSave != true) {
    echo 'Não foi possível salvar';
    die;
}

echo 'Turma salvo com sucesso!';

