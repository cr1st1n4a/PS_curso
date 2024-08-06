<?php
define('DB_HOST', 'localhost');
define('DB_PORT', 5432);
define('DB_NAME', 'd4dos1');
define('DB_USER', 'cr1st1n4a');
define('DB_PASS', 'c09262824');

try {
    $dsn = "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Ocorreu um erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>