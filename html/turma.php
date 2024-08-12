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

$turma = [
    'quantidade_de_alunos'  => $_POST['quantidade_alunos'],
    'data_de_inicio'        => $_POST['data_inicio'],
    'data_de_fim'           => $_POST['data_fim'],
];

$IsSave = InsertQuery::table('turma')->save($turma);

if (!$IsSave) {
    echo json_encode(['message' => 'Não foi possível salvar']);
    exit;
}

echo json_encode(['message' => 'Turma salvo com sucesso!']);

