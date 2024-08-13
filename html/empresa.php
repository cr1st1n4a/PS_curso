

<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$empresaAsa = [
    'nome_fantasia'       => 'Asa',
    'cnpj'                => '00.000.000/0000-00',
    'inscricao_estadual'  => '123456',
    'data_de_nascimento'  => '1950-12-12',
];

$IsSave = InsertQuery::table('Empresa')->save($empresaAsa);

$empresaFlor = [
    'nome_fantasia'       => 'Flor',
    'cnpj'                => '00.000.000/0000-00',
    'inscricao_estadual'  => '193456',
    'data_de_nascimento'  => '1950-08-12',
];

$IsSave = InsertQuery::table('Empresa')->save($empresaFlor);

$empresaCeu = [
    'nome_fantasia'       => 'Céu',
    'cnpj'                => '00.000.000/0000-00',
    'inscricao_estadual'  => '823456',
    'data_de_nascimento'  => '1950-10-12',
];

$IsSave = InsertQuery::table('Empresa')->save($empresaCeu);

$empresaLua = [
    'nome_fantasia'       => 'Lua',
    'cnpj'                => '00.000.000/0000-00',
    'inscricao_estadual'  => '173456',
    'data_de_nascimento'  => '1950-06-12',
];

$IsSave = InsertQuery::table('Empresa')->save($empresaLua);

if ($IsSave != true) {
    echo "Não foi possivel Salvar";
    die;
}
 
echo "Empresa salva com sucesso!";