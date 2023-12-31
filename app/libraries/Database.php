<?php
    class Database {
        private $dbHost = DB_HOST;
        private $dbUser = DB_USER;
        private $dbPass = DB_PASS;
        private $dbName = DB_NAME;

        private $statement;
        private $dbHandler;
        private $error;

        public function __construct() {
            $conne = 'mysql:host=' .$this->dbHost . ';dbname=' . $this->dbName;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            try{
                $this->dbHandler = new PDO($conne , $this->dbUser, $this->dbPass, $options);
            }catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }
        // Allows us to write queries
        public function query($sql) {
            $this->statement = $this->dbHandler->prepare($sql);
        }
        // Bind Values
        public function bind($parameter, $value, $type = null) {
            switch(is_null($type)) {
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
                $type = PDO::PARAM_STRING;
            }
            $this->statement->bindValue($parameter, $value, $type);
        }
        // Excecution pf prepared statement
        public function execute() {
            return $this->statement->execute();
        }
        // Return an array
        public function resultSet() {
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }
        // Return a specific row as an object
        public function single() {
            $this->execute();
            return $this->statement->fetch(PDO:FETCH_OBJ);
        }
        // Get the row count
        public function rowCount() {
            return $this->statement->rowCount();
        }
    }
?>