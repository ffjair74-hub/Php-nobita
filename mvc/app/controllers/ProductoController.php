<?php
require_once '../models/Producto.php';

class ProductoController {
    private $model;

    public function __construct() {
        $this->model = new Producto();
    }

    public function index() {
        $productos = $this->model->listar();
        require_once '../view/listar.php';
    }

    public function create() {
        require_once '../view/crear.php';
    }

    public function store() {
        // Validaciones mínimas obligatorias
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $errores = [];

        if(strlen($nombre) < 3) $errores[] = "El nombre es muy corto.";
        if($precio <= 0) $errores[] = "El precio debe ser mayor a 0.";
        if($stock < 0) $errores[] = "El stock no puede ser negativo.";

        if(empty($errores)) {
            $this->model->insertar($nombre, $_POST['descripcion'], $precio, $stock);
            header("Location: index.php?action=index");
        } else {
            require_once '../view/crear.php';
        }
    }

    public function edit() {
        if(isset($_GET['id'])) {
            $producto = $this->model->obtenerPorId($_GET['id']);
            require_once '../view/editar.php';
        }
    }

    public function update() {
        if($_POST) {
            $this->model->actualizar($_POST['id'], $_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['stock']);
            header("Location: index.php?action=index");
        }
    }

    public function delete() {
        if(isset($_GET['id'])) {
            $this->model->eliminar($_GET['id']);
            header("Location: index.php?action=index");
        }
    }
}
