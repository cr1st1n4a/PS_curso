<?php

namespace app\database\builder;

use app\database\Connection;
use Exception;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class InsertQuery
{
    private string $table = ''; // Inicializa a tabela como uma string vazia

    /**
     * Define o nome da tabela para a consulta de inserção.
     *
     * @param string $tableName Nome da tabela.
     * @return self
     */

    public static function table(string $tableName = ''): self
    {
        $self = new self();
        $self->table = $tableName;
        return $self;
    }
    public function save(array $values)
    {
        try {
            if (empty($this->table) || empty($values)) {
                throw new \Exception("O nome ou os valores da tabela não podem ficar vazios");
            }
            $query = '';
            $query = "insert into {$this->table} (";
            $query .= implode(',', array_keys($values)) . ') values (';
            $query .= ':' . implode(',:', array_keys($values)) . ');';
            $con = Connection::open();
            $prepared = $con->prepare($query);
            foreach ($values as $key => $value) {
                $prepared->bindValue(":$key", $value);
            }
            return $prepared->execute();
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }
}
