<?php

require_once "config.php";
// require_once ist eine PHP-Funktion, die eine externe PHP-Datei in die aktuelle Datei einbindet

class Db
{
    // Die Klasse Db ist eine einfache Datenbank-Wrapper-Klasse, die eine statische Variable $pdo enthält. Diese Variable soll eine Instanz der PDO-Klasse speichern, die für die Verbindung zur Datenbank verwendet wird.
    public static $pdo;

    static function connection()
    {
        try {
            self::$pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
            // PDO (PHP Data Objects) ist eine PHP-Erweiterung, die eine einheitliche Schnittstelle für den Zugriff auf verschiedene Datenbanken bietet. Mit PDO kannst du z.B. MySQL, PostgreSQL, SQLite und andere Datenbanken ansprechen.
        } catch (PDOException $error) {
            echo die("Error databse connection: " . $error->getMessage());
        }

        return self::$pdo;
    }

    static function prepareOwn($sql)
    {
        return self::connection()->prepare($sql);
    }
}
