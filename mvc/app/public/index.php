<?php
// Usamos __DIR__ para asegurar que suba un nivel desde 'public' hacia 'app'
require_once __DIR__ . '/../controllers/ProductoController.php';

$controller = new ProductoController();
$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "La acción no existe.";
}