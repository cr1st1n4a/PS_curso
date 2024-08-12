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

$empresa = [
    'nome_fantasia'       => $_POST['empresa_nome_fantasia'],
    'cnpj'                => $_POST['empresa_cnpj'],
    'inscricao_estadual'  => $_POST['empresa_inscricao_estadual'],
    'data_de_nascimento'  => $_POST['empresa_data_nascimento'],
];

$IsSave = InsertQuery::table('Empresa')->save($empresa);

if (!$IsSave) {
    echo json_encode(['message' => "Não foi possivel Salvar"]);
    exit;
}
 
echo json_encode(['message' => "Empresa salva com sucesso!"]);