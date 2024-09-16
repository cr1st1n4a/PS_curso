<?php
# Namespace: A classe UpdateQuery está dentro do namespace 
# app\database\builder. Isso ajuda a organizar o código, 
# especialmente em projetos maiores, evitando conflitos de nome 
# entre diferentes classes.

namespace app\database\builder;

# Importação: Aqui, a classe Connection do namespace app\database 
# é importada para ser usada dentro da classe UpdateQuery. 
# Presume-se que a classe Connection gerencie a conexão com o 
# banco de dados.


use app\database\Connection;

class UpdateQuery
{
    # $table: Armazena o nome da tabela onde a operação de update será realizada.

    private string $table;

    # $fieldsAndValues: Um array associativo onde as chaves representam os campos a 
    #serem  atualizados e os valores são os novos valores para esses campos.

    private array $fieldsAndValues = [];

    # $where: Um array que guarda as condições (cláusula WHERE) para a atualização.

    private array $where = [];

    # $binds: Armazena os valores que serão vinculados às placeholders na query para evitar injeções SQL.

    private array $binds = [];


    public function executeQuery($query)
    {
        # Estabelece a conexão com o banco de dados.
        $connection = Connection::open();
        # Prepara a query SQL para execução.
        $prepare    = $connection->prepare($query);
        # Executa a query preparada, passando os valores que
        # foram vinculados às placeholders.
        return $prepare->execute($this->binds ?? []);
    }

    public function where(string $field, string $operator, string|int $value, ?string $logic = null)
    {
        $placeHolder = '';
        $placeHolder = $field;
        if (str_contains($placeHolder, '.')) {
            $placeHolder = substr($field, strpos($field, '.') + 1);
        }
        $this->where[] = "{$field} {$operator} :{$placeHolder} {$logic}";
        $this->binds[$placeHolder] = $value;
        return $this;
    }

    private function createQuery()
    {
        if (!$this->table) {
            throw new \Exception("A consulta precisa invocar o método table.");
        }
        if (!$this->fieldsAndValues) {
            throw new \Exception("A consulta precisa dos dados para realizar a atualização.");
        }
        $query = '';
        $query = "update {$this->table} set ";
        foreach ($this->fieldsAndValues as $field => $value) {
            $query .= "{$field} = :{$field},";
            $this->binds[$field] = $value;
        }
        $query = rtrim($query, ',');
        $query .= (isset($this->where) and (count($this->where) > 0)) ? ' where ' . implode(' ', $this->where) : '';
        return $query;
    }

    public function update()
    {
        $query = $this->createQuery();
        try {
            return $this->executeQuery($query);
        } catch (\PDOException $e) {
            throw new \Exception("Restrição: {$e->getMessage()}");
        }
    }

    public static function table(string $table){
        $self = new self;
        $self->table = $table;
        return $self;

}
    public function set(array $fieldsAndValues)
    {
        $this->fieldsAndValues = $fieldsAndValues;
        return $this;

    }
    }