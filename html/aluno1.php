<?php

use app\database\builder\InsertQuery;
use app\database\builder\SelectQuery;
use app\database\builder\UpdateQuery;


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


    // Processar a ação solicitada
    if ($acao === 'c') {
        $IsSave = InsertQuery::table('Aluno')->save($FieldsAndValues);
        $aluno = (array)SelectQuery::select('id')
            ->from('Aluno')
            ->order('id', 'desc')
            ->fetch();
        $id = $aluno['id'];
        $response['status'] = $IsSave;
        $response['msg'] = $IsSave ? 'Salvo com sucesso!' : 'Falha ao salvar.';
        $response['id'] = $id;
    } elseif ($acao === 'e') {
        if ($id) {
            $IsSave = UpdateQuery::table('Aluno')
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
