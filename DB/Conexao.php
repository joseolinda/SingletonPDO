<?php

namespace DB;

class Conexao {
    // Armazena a instância
    private static $instance;

    // Dados de acesso MySQL
    private static $connectURL = "mysql:dbname=rucedro;host=127.0.0.1";
    private static $user = 'root';
    private static $password = '';

    // Impede o uso do construtor
    private function __construct(){}

    // Impede o clone de instância
    private function __clone(){}

    // Impede a criação da instância via unserialize()
    private function __wakeup(){}

    // Cria o método que cria ou retorna a instância
    public static function getInstance() {

        if (!isset(self::$instance)) {
            try {
                self::$instance = new \PDO(self::$connectURL, self::$user, self::$password);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch( PDOException $pe) {
                die("Erro ao criar objeto PDO: " . $pe->getMessage());
                return false;
            }
        }

        return self::$instance;
    }
}
