<?php

/**
 *
 */
class Database
{
    private $dbhost = 'localhost';
    private $dbuser = 'root';
    private $dbpass = 'Changeless11!';
    private $dbname = 'bettipsdb';

    private $dbh;
    private $stmt;
    private $error;
    private static $instance;

    private function __construct()
    {
        $DSN = "mysql:host=". $this->dbhost . ";dbname=". $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbh = new PDO($DSN,  $this->dbuser, $this->dbpass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    private function __clone()
    {
        // code...
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
         $this->stmt->execute();
         return $this->stmt;
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAl(PDO::FETCH_OBJ);
    }

    public function single()
    {
        $this->execute();
        if ($this->rowCount() > 0) {
            return $this->stmt->fetch(PDO::FETCH_OBJ);
        }
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function getLastInsertedID()
    {
        return $this->dbh->lastInsertId();
    }

    public function getTotalGames()
    {
        try {
            $sql = "SELECT id FROM games WHERE 1";
            $this->query($sql);
            $row = $this->execute();
            return $row->rowCount();
        } catch (Error $e) {
            $_SESSION['error'] = $e->getMessage();
            return null;
        }
    }

    public function getTotalLossGames()
    {
        try {
            $sql = "SELECT id FROM games WHERE status = 0";
            $this->query($sql);
            $row = $this->execute();
            return $row->rowCount();
        } catch (Error $e) {
            $_SESSION['error'] = $e->getMessage();
            return null;
        }
    }

    public function getTotalWinGames()
    {
        try {
            $sql = "SELECT id FROM games WHERE status = 1";
            $this->query($sql);
            $row = $this->execute();
            return $row->rowCount();
        } catch (Error $e) {
            $_SESSION['error'] = $e->getMessage();
            return null;
        }
    }
}

$db = Database::getInstance();
