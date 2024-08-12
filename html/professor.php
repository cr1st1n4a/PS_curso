<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

header('Content-Type: application/json');

// Recebe os dados JSON do corpo da requisição
$data = json_decode(file_get_contents('php://input'), true);

// Verifica se a decodificação foi bem-sucedida
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['message' => 'Erro ao processar dados JSON.']);
    exit;
}

$Professor = [
    'nome'                => $_POST['professor_nome'],
    'cpf'                 => $_POST['professor_cpf'],
    'rg'                  => $_POST['professor_rg'],
    'data_de_nascimento'  => $_POST['professor_data_nascimento'],
];
$IsSave = InsertQuery::table('professor')->save($Professor);

if (!$IsSave) {
    echo json_encode(['message' => 'Não foi possível salvar']);
    exit;
}

echo json_encode(['message' => 'Professor salvo com sucesso!']);
