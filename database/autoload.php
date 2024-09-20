<?php
require_once __DIR__ . "/connection/Connection.php";

// Models
$models_autoload = [
    'Product' => 'models/Product.php',
];
foreach ($models_autoload as $name => $path) {
    require_once($path);
}
// Controllers
$controllers_autoload = [
    'ProductController' => 'controllers/ProductController.php',
    'InstallController' => 'controllers/InstallController.php',
];
foreach ($controllers_autoload as $name => $path) {
    require_once($path);
}
// Anything else