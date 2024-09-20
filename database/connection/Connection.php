<?php
require_once "Config.php";
class Connection extends Config
{
    protected $db = 'ebuka_commerce';

    public function connect()
    {
        $connection = new mysqli($this->server, $this->username, $this->password, $this->db);
        if ($connection->connect_error) {
            die("Connection to database failed: " . $connection->connect_error);
        } else {
            return $connection;
        }
    }
}
