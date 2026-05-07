<?php
require_once 'config.php';

class Database {
    protected $connection;

    public function __construct() {
        try {
            $this->connection = new PDO(
                "mysql:host=" . DATABASE['HOST'] . ";dbname=" . DATABASE['DBNAME'],
                DATABASE['USER'],
                DATABASE['PASSWORD']
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Chyba pripojenia: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}