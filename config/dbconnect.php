<?php
class Database
{
    private $host = 'localhost'; // Database host
    private $dbName = 'wheatear-travels'; // Database name
    private $user =  'wheateartravels-aarhat'; //'parkneur_admin'; //    
    private $pass =  'Wheatear@travel'; // Database password


    public function connect()
    {
        try {
            $conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
    }
}