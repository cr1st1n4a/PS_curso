

<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$disciplinaMatematica = [
    'nome'    => 'Matemática',
    'ativo'   =>'true',
];

$IsSave = InsertQuery::table('disciplina')->save($disciplinaMatematica);

$disciplinaciencias = [
    'nome'    => 'ciências',
    'ativo'   => 'false',
];

$IsSave = InsertQuery::table('disciplina')->save($disciplinaciencias);

$disciplinahistoria = [
    'nome'    => 'história',
    'ativo'   => 'false',
];

$IsSave = InsertQuery::table('disciplina')->save($disciplinahistoria);

$disciplinageografia = [
    'nome'    => 'geográfia',
    'ativo'   => 'true',
];

$IsSave = InsertQuery::table('disciplina')->save($disciplinageografia);

if ($IsSave != true) {
    echo 'Não foi possível salvar';
    die;
}

echo 'Disciplina salvo com sucesso!';

