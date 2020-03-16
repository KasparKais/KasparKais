<?php
class DB {
    private $connection;

    public function openConnection($dbname = NULL)
    {
        $dbhost = "mysql-server-80";
        $dbuser = "root";
        $dbpass = "root_password";
        $dbname = "web-bootcamp-db";

        $this->$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->$connection->connect_error);
        }
    }

   public function closeConnection()
    {
        $this->connection->close();
    }

    public function run ($sql)
    {
        $response = $this->connection->query($sql);

        if ($response) {
            return $response;
        } else {
            die("SQL error: " . $this->connection->error . "</br>");
        }
    }

}
    
?>