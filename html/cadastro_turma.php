

<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';


$turma = [
    'quantidade_de_alunos'  => $_POST['quantidade_alunos'],
    'data_de_inicio'        => $_POST['data_inicio'],
    'data_de_fim'           => $_POST['data_fim'],
];

$IsSave = InsertQuery::table('turma')->save($turma);


