<?php

namespace app\database\builder;

use app\database\Connection;
use Exception;
class InsertQuery
{
    private $table;
    public static function table(string $tableName = '')
    {
        $self = new self;
        $self->table = $tableName;
        return $self;
    }
    public function save(array $values)
    {
        if (empty($this->table) || empty($values)) {
            throw new \Exception("O nome ou os valores da tabela não podem ficar vazios");
        }

        $key = array_keys($values);
        $keyName = implode(',', $key);
        $paramByName = ':' . implode(',:', $key);

        $sql = "INSERT INTO {$this->table} ({$keyName}) VALUES ({$paramByName})";
        var_dump($sql); // Adicionado para depuração
        die;
        $con = Connection::open();
        $prepared = $con->prepare($sql);

        foreach ($values as $key => $value) {
            $prepared->bindValue(":$key", $value);
        }

        $prepared->execute();
        echo "Dados inseridos com sucesso;";
    }
}
