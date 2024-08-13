

<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$alunofernanda = [
    'nome'               => 'Fernanda',
    'cpf'                => '000.000.000-00',
    'rg'                 => '12345',
    'data_de_nascimento' => '1999-06-06',
];
$IsSave = InsertQuery::table('Aluno')->save($alunofernanda);

$alunoLuana = [
    'nome'               => 'Luana',
    'cpf'                => '000.000.000-00',
    'rg'                 => '12365',
    'data_de_nascimento' => '1999-07-06',
];
$IsSave = InsertQuery::table('Aluno')->save($alunoLuana);

$alunoClara = [
    'nome'               => 'Clara',
    'cpf'                => '000.000.000-00',
    'rg'                 => '12369',
    'data_de_nascimento' => '1999-07-08',
];
$IsSave = InsertQuery::table('Aluno')->save($alunoClara);

$alunoLucas = [
    'nome'               => 'Lucas',
    'cpf'                => '000.000.000-00',
    'rg'                 => '82369',
    'data_de_nascimento' => '1999-07-10',
];
$IsSave = InsertQuery::table('Aluno')->save($alunoLucas);

if ($IsSave != true) {
    echo 'Não foi possível salvar';
    die;
}

echo 'Aluno salvo com sucesso!';






