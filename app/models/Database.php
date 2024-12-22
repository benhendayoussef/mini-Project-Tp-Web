<?php
class Database {
    private static $pdo;

    public static function connect() {
        if (self::$pdo === null) {
            $config = include(__DIR__ . '/../../config.php');

            try {
                self::$pdo = new PDO(
                    "mysql:host={$config['host']};dbname={$config['dbname']}",
                    $config['username'],
                    $config['password']
                );
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Database Connection Failed: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
?>
