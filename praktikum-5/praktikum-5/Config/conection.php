<?php
namespace Config;

require __DIR__ . '/../vendor/autoload.php';

use PDO;
use PDOException;
use Dotenv\Dotenv;

class conection {
    public static function make()
    {
        $dotenv = Dotenv::createimmutable(__DIR__ . '/../');
        $dotenv->saveload();
        $dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);

        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $dbuser = $_ENV['DB_USER'];
        $dbpass = $_ENV['DB_PASS']; 

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            die("Koneksi gagal: " . $e->getMessage());
        }
        
    }
}