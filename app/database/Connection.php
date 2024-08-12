<?php

namespace app\database;

use PDO;

class Connection
{
    #Variável de conexão com banco de dados.
    private static $pdo = null;
    #Método de conexão com banco de dados
    public static function open(): PDO
    {
        #tentativa de estabelecer uma conexão com o banco de dados com tratamento de exceções.
        #Verifica se a conexão já existe e retorna se sim
        if (static::$pdo) {
            return static::$pdo;
        }
        #Define as opções de conexão
        $options = [
            # Configurar modo de tratamento de erros
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            # Modo de busca de dados (associativo)
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            # DESATIVAR EMULAÇÃO DE PREPARED STATEMENTS
            PDO::ATTR_EMULATE_PREPARES => false,
            #Desativar conexão persistente (otimização de memória)
            PDO::ATTR_PERSISTENT => true,
            #Retornar strings como strings
            PDO::ATTR_STRINGIFY_FETCHES => true,
        ];
        try {
            $dsn = 'pgsql:host=localhost;port=5432;dbname=senac';
            //caso a conexão com banco de dados não exista criamos, una nova conexão.
            static::$pdo = new PDO($dsn, 'cr1st1n4a', 'c09262824', $options);
            #Permite a captura e o salvamento de acentuação no banco
            static::$pdo->exec("SET NAMES 'utf8'");
            return static::$pdo;
        } catch (\PDOException $e) {
            #Lança uma exceção ou uma mensagem de erro 
            throw new \PDOException("Restrição: " . $e->getMessage(), 1);
        }
    }
}
