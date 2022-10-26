<?php

class Database_Connection
{
    public $servername;
    public $username;
    public $password;
    public $database_name;
    public $connection;
    public $command;

    public function __construct(string $servername, string $username, string $password, string $database_name)
    {
        if (is_string($servername))
        {
            $this->servername = $servername;
        }
        if (is_string($username))
        {
            $this->username = $username;
        }
        if (is_string($password))
        {
            $this->password = $password;
        } 
        if (is_string($database_name))
        {
            $this->database_name = $database_name;
        }
        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->database_name);

        if($this->connection->connect_error)
        {
            die("Connection failed: " . $this->connection->connect_error);
        }else
        {
            echo "Connected successfully with Database!<br>";
        }
    }

    public function inserting_occurrence(string $color, int $distance, string $planet, string $discoverer, string $country)
    {
        $this->command = "INSERT INTO planets(color, planet, distance, discoverer, country) VALUES('" . $color ."','" . $planet . "'," . $distance . ",'" . $discoverer . "','" . $country . "');";
        echo $this->command;
        if($this->connection->query($this->command) == TRUE)
        {
            echo "Record updated successfully";
        } else
        {
            echo "Error updating record: " . $this->connection->error;
        }
    }
}
?>