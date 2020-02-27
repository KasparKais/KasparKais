<?php

class DB {
    private $connection;

    public function openConnection()
    {
        $dbhost = "mysql-server-80";
        $dbuser = "root";
        $dbpass = "root_password";
        $dbname = "web-bootcamp-db";
        $this->connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        if($this->connection->connect_error) {
            echo "connection failed";
        }
        else {
            // echo "connection successful <br/>" ;
        }
    }

    public function closeConnection() {

        $this->connection->close();
    }
        public function run($sql) {
            $response = $this->connection->query($sql);

            if ($response) {
                return $response;
            } else {
                die("SQL error: " . $this->connection->error . "</br>");
            }
        }
    }
?>