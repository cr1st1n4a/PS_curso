<?php

class bank
{
    public function insert(
        array $fieldAndValues = [],
        string $table =''
    ) {
        $values = array_values($fieldAndValues);
        #O metodo privado do php array_keys separa todas e monta um outro array somente para a chave
        $fields = array_keys($fieldAndValues);
        $stringField = implode(',', $fields);
        $stringValues = ':' . implode(',:', $fields);
        $sql = "insert into {$table} ({$stringField}) values ({$stringValues});";
        var_dump($sql);
    }
}

$bank = new bank();
$fieldAndValues =[
    'codigo_banco'  => '001',
    'isbp'          => '001',
    'nome'          => 'Banco do Brasil',
    'nome_completo' => 'Banco do Brasil'
];
$bank->insert($fieldAndValues, 'bank');
?>