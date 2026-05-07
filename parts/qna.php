<?php
namespace otazkyodpovede;

// Načítame základnú triedu Database, ktorá je v tom istom priečinku
require_once 'database.php';

use PDO;
use Exception;

// Trieda QnA dedí (extends) schopnosť pripojiť sa k DB od triedy Database
class QnA extends \Database {
    
    public function __construct() {
        // Zavolá konštruktor rodiča (Database), ktorý vytvorí spojenie
        parent::__construct();
    }

    public function getQnA() {
        try {
            // Použijeme zdedené spojenie $this->connection
            $query = $this->connection->query("SELECT * FROM qna");
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "Chyba pri získavaní dát: " . $e->getMessage();
            return [];
        }
    }
}