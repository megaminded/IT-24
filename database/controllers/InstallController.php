<?php

class InstallController extends Connection
{
    function install()
    {
        try {
            $this->create_database($this->db);
            $this->create_table("CREATE TABLE products(  
                id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
                create_time DATETIME COMMENT 'Create Time',
                product_name VARCHAR(255),
                product_description VARCHAR(255))");
        } catch (\Exception $ex) {
            exit($ex->getMessage());
        }
    }
    function uninstall()
    {
    }
    function update()
    {
    }
    private function create_database($name)
    {
        $statement = "CREATE DATABASE $name";
        $con = $this->connect();
        if ($con->query($statement)) {
            echo "database successfully created";
        } else {
            echo "Database error, " . $con->error;
        }
    }
    private function create_table($statement)
    {
        $con = $this->connect($this->db);
        if ($con->query($statement)) {
            echo "created table successfully created";
        } else {
            echo "created table error, " . $con->error;
        }
    }
}
