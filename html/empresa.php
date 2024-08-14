

<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$empresa = [
    'nome_fantasia'       => $_POST['empresa_nome_fantasia'],
    'cnpj'                => $_POST['empresa_cnpj'],
    'inscricao_estadual'  => $_POST['empresa_inscricao_estadual'],
    'data_de_fundacao'    => $_POST['empresa_data_fundacao'],
];

$IsSave = InsertQuery::table('Empresa')->save($empresa);

