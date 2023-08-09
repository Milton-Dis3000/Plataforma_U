<?php
class DB
{
    public $pdo;

    public function __construct()
    {
        try {
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "universidad";

            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            $dsn = "mysql:host=$hostname;id21127382_proyecto593=$dbname";
            $this->pdo = new PDO($dsn, $username, $password, $options);

        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }
}
