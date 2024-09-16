<?php

namespace CoffeeCode\DataLayer;

use PDO;
use PDOException;

/**
 * Class Connect
 * @package CoffeeCode\DataLayer
 */
class Connect
{
    /** @var PDO[] array para armazenar as instâncias de PDO */
    private static array $instance = [];

    /** @var PDOException|null para armazenar erros de conexão */
    private static ?PDOException $error = null;

    /**
     * Obtém uma instância de conexão PDO.
     * 
     * @param array|null $database Configurações opcionais para o banco de dados
     * @return PDO|null Retorna a instância PDO ou null em caso de erro
     */
    public static function getInstance(array $database = null): ?PDO
    {
        // Use as configurações padrão se nenhum array de configuração for passado
        $dbConf = $database ?? DATA_LAYER_CONFIG;
        $dbName = "{$dbConf['driver']}-{$dbConf['dbname']}@{$dbConf['host']}";
        $dbDsn = "{$dbConf['driver']}:host={$dbConf['host']};dbname={$dbConf['dbname']};port={$dbConf['port']}";

        // DSN alternativo para SQL Server (sqlsrv)
        if ($dbConf['driver'] === 'sqlsrv') {
            $dbDsn = "{$dbConf['driver']}:Server={$dbConf['host']},{$dbConf['port']};Database={$dbConf['dbname']}";
        }

        // Se ainda não houver uma instância para esse banco, crie uma nova
        if (empty(self::$instance[$dbName])) {
            try {
                self::$instance[$dbName] = new PDO(
                    $dbDsn,
                    $dbConf['username'],
                    $dbConf['passwd'],
                    $dbConf['options']
                );
            } catch (PDOException $exception) {
                // Armazena o erro para acessos futuros
                self::$error = $exception;
                return null;
            }
        }

        return self::$instance[$dbName];
    }

    /**
     * Retorna o erro de conexão se houver.
     * 
     * @return PDOException|null
     */
    public static function getError(): ?PDOException
    {
        return self::$error;
    }

    /**
     * Construtor privado para prevenir a criação de novas instâncias.
     */
    private function __construct()
    {
    }

    /**
     * Previne a clonagem da instância.
     */
    private function __clone()
    {
    }

    /**
     * Previne a desserialização da instância.
     */
    public function __wakeup()
    {
    }
}
