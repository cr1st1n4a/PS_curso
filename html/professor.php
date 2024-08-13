

<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$ProfessorJose = [
    'nome'                => 'José',
    'cpf'                 => '000.000.000-00',
    'rg'                  => '123456',
    'data_de_nascimento'  => '1980-06-30',
];
$IsSave = InsertQuery::table('professor')->save($ProfessorJose);

$ProfessorAna = [
    'nome'                => 'Ana',
    'cpf'                 => '000.000.000-00',
    'rg'                  => '823456',
    'data_de_nascimento'  => '1980-07-30',
];
$IsSave = InsertQuery::table('professor')->save($ProfessorAna);

$ProfessorClara = [
    'nome'                => 'Clara',
    'cpf'                 => '000.000.000-00',
    'rg'                  => '193456',
    'data_de_nascimento'  => '1980-06-02',
];
$IsSave = InsertQuery::table('professor')->save($ProfessorClara);

$ProfessorPedro = [
    'nome'                => 'Pedro',
    'cpf'                 => '000.000.000-00',
    'rg'                  => '723456',
    'data_de_nascimento'  => '1980-05-08',
];
$IsSave = InsertQuery::table('professor')->save($ProfessorPedro);

if ($IsSave != true) {
    echo 'Não foi possível salvar';
    die;
}

echo 'Professor salvo com sucesso!';
