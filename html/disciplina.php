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

$disciplina = [
    'nome'    => $_POST['disciplina_nome'],
    'ativo'   => isset($_POST['disciplina_status']) ? 'true' : 'false',
];

$IsSave = InsertQuery::table('disciplina')->save($disciplina);

if (!$IsSave) {
    echo json_encode(['message' => 'Não foi possível salvar']);
    exit;
}

echo json_encode(['message' => 'Disciplina salvo com sucesso!']);

