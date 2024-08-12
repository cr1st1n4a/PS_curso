<?php

namespace app\database\builder;

use app\database\builder\Connection as BuilderConnection;
use app\database\Connection;

class InsertQuery
{
    private $table;
    public static function table(string $tableName = '')
    {
        $self = new self;
        $self->table = $tableName;
        return $self;
    }
    public function save(array $values): bool
    {
        try {
            if (empty($this->table) || empty($values)) {
                throw new \Exception("O nome ou os valores da tabela não podem ficar vazios");
            }
            $key = array_keys($values);
            $keyName = implode(',', $key);
            $paramByName = ':' . implode(',:', $key);
            $sql = "INSERT INTO {$this->table} ({$keyName}) VALUES ({$paramByName})";
            $con = Connection::open();
            $prepared = $con->prepare($sql);
            return $prepared->execute($values);
        } catch (\PDOException $e) {
            throw new \PDOException("Restrição: " . $e->getMessage(), 1);
        }
    }
}
