<?php

class Database {

    private static $connection = null;

    public function __construct() {
    }

    public static function getConnection() {
        if (is_null(self::$connection)) {
            self::$connection = new PDO("mysql:host=localhost;dbname=check24_db", 'root', 'root');
        }
        return self::$connection;
    }

}