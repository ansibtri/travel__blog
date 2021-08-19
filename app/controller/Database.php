<?php 
    
    class Database{
        private $dbHost = DB_HOST;
        private $dbUser = DB_USER;
        private $dbPass = DB_PASS;
        private $dbName = DB_NAME;

        public function connect(){
            $this->dsn = "mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            try{
                $this->dbHandler = new PDO($this->dsn, $this->dbUser, $this->dbPass);
                $this->dbHandler->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
                return $this->dbHandler;
            }catch(PDOException $e){
                echo "Error ->".$e->getMessage();
            }
        }

    }
?>