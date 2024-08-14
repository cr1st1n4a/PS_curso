

<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$Professor = [
    'nome'                => $_POST['professor_nome'],
    'cpf'                 => $_POST['professor_cpf'],
    'rg'                  => $_POST['professor_rg'],
    'data_de_nascimento'  => $_POST['professor_data_nascimento'],
];
$IsSave = InsertQuery::table('professor')->save($Professor);

