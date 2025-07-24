<?php
use MongoDB\Client;

class Mongo {
    private static $db;

    public static function connect() {
        if (!self::$db) {
            $client = new Client("mongodb://localhost:27017");
            self::$db = $client->selectDatabase('testdb');
        }
        return self::$db;
    }
}
