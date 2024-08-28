<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$disciplina_nome = isset($_POST['disciplina_nome']) ? filter_var($_POST['disciplina_nome'], FILTER_UNSAFE_RAW) : '';
// Usando FILTER_VALIDATE_BOOLEAN para garantir que $disciplina_status seja booleano
$disciplina_status = (isset($_POST['disciplina_status']) and ($_POST['disciplina_status'] == 'true')) ? 'true' : 'false';


$disciplina = [
    'nome'  => $disciplina_nome,
    'ativo' => $disciplina_status,
];

try {
    $isSave = InsertQuery::table('disciplina')->save($disciplina);
    if ($isSave != true) {
        echo "Falha ao salvar dados ".$isSave;
        die;
    }
    echo "Dados salvos com sucesso!";
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}
