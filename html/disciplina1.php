<?php
use app\database\builder\InsertQuery;
use app\database\builder\SelectQuery;
use app\database\builder\UpdateQuery;

// Configuração do cabeçalho para resposta JSON
header("Content-type: application/json; charset=utf-8");

$response = [
    'status' => false,
    'msg' => 'Restrição desconhecida.',
    'id' => null
];

try {
    // Receber dados do POST
    $acao = $_POST['acao'] ?? '';
    $id = $_POST['id'] ?? null;
    $FieldsAndValues = $_POST['FieldsAndValues'] ?? [];

    // Garantir que o campo 'ativo' seja um booleano
    if (isset($FieldsAndValues['ativo'])) {
        $FieldsAndValues['ativo'] = !empty($FieldsAndValues['ativo']) && strtolower($FieldsAndValues['ativo']) === 'true';
    }

    // Processar a ação solicitada
    if ($acao === 'c') {
        $IsSave = InsertQuery::table('disciplina')->save($FieldsAndValues);
        $disciplina = (array)SelectQuery::select('id')
            ->from('disciplina')
            ->order('id', 'desc')
            ->fetch();
        $id = $disciplina['id'];
        $response['status'] = $IsSave;
        $response['msg'] = $IsSave ? 'Salvo com sucesso!' : 'Falha ao salvar.';
        $response['id'] = $id;
    } elseif ($acao === 'e') {
        if ($id) {
            $IsSave = UpdateQuery::table('disciplina')
                ->set($FieldsAndValues)
                ->where('id', '=', $id)
                ->update();
            $response['status'] = $IsSave;
            $response['msg'] = $IsSave ? 'Atualizado com sucesso!' : 'Falha ao atualizar.';
            $response['id'] = $id;
        } else {
            $response['msg'] = 'ID não fornecido para atualização.';
        }
    } else {
        $response['msg'] = 'Ação inválida.';
    }
} catch (Exception $e) {
    $response['msg'] = 'Erro: ' . $e->getMessage();
}

// Enviar a resposta como JSON
echo json_encode($response);