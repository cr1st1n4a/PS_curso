<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';


$empresa = [
    'nome_fantasia'       => 'abc',
    'cnpj'                => 'fghnm,',
    'inscricao_estadual'   => 'wedfghj',
    'data_de_nascimento'  => '1999-12-12',
];

InsertQuery::table('Empresa')->save($empresa);