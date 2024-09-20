<?php
require_once __DIR__ . "/../connection/Connection.php";
class Product extends Connection
{
    function get($id)
    {
        $statement = "SELECT * FROM products where product_id = $id";
        // $this->connect()
    }
    function all()
    {
        $statement = "SELECT * FROM products";
        $query  = $this->connect()->query($statement);
        return $query;
    }
    function create($statement)
    {
    }
    function update($statement)
    {
    }
}
