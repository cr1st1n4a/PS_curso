

<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$aluno = [
    'nome'               => $_POST['aluno_nome'],
    'cpf'                => $_POST['aluno_cpf'],
    'rg'                 => $_POST['aluno_rg'],
    'data_de_nascimento' => $_POST['aluno_data_nascimento'],
];
$IsSave = InsertQuery::table('Aluno')->save($aluno);








