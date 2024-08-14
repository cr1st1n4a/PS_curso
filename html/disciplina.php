

<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$disciplina_nome = isset($_POST['disciplina_nome']) ? filter_var($_POST['disciplina_nome'], FILTER_UNSAFE_RAW) : '';
$disciplina_status = isset($_POST['disciplina_status']) ? filter_var($_POST['disciplina_status'], FILTER_UNSAFE_RAW) : false;

$disciplina = [
    'nome'  => $disciplina_nome,
    'ativo' => $disciplina_status,
];

$IsSave = InsertQuery::table('disciplina')->save($disciplina);



