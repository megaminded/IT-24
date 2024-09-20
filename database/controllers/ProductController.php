<?php
require_once 'autoload.php';

class ProductController
{
    function all()
    {
        $product = new Product();
        $data = $product->all();
        include(__DIR__ . '/../views/products.php');
    }
}
