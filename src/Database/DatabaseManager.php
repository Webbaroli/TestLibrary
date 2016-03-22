<?php
namespace Src\Database;

class DatabaseManager{

    private static $dbConnection = null;

    public static function getConnection(){
        if(self::$dbConnection == null){
            self::$dbConnection = self::initDbConnection();
        }
        return self::$dbConnection;
    }

    private function initDbConnection(){

        $connection = null;
        $connection = new \PDO(
            'mysql:host='.DatabaseConfig::HOST.';dbname='.DatabaseConfig::DB_NAME,
            DatabaseConfig::USERNAME,
            DatabaseConfig::PASSWORD
        );

        return $connection;
    }

}