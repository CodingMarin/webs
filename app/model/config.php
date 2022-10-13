<?php
namespace app\model;
use PDO;
use PDOException;

class config 
{
    private $hostname = 'localhost';
    private $database = 'db';
    private $port = '3306';
    private $charset = 'utf8';
    private $username = 'root';
    private $password = '';
    private $pdo;
    private $attributes = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_CASE => PDO::CASE_NATURAL,
                                PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING];
    
    public function getPDOConnect()
    {
        try {
            $this->pdo = new PDO('mysql:host='.$this->hostname.';
                                    dbname='.$this->database.';
                                        portname='.$this->port.';
                                            charset='.$this->charset.';',
                                                $this->username,
                                                    $this->password,
                                                        $this->attributes);
        } catch (PDOException $e) {
            //PDOException $e;
            //echo 'no conectado'. $e->getMessage();
        }
        return $this->pdo;
    }
}
?> 