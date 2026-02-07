<?php
require_once '../config/db.php';

class Producto {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function listar() {
        $sql = "SELECT * FROM productos ORDER BY id DESC";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_OBJ);
    }

    public function obtenerPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function insertar($n, $d, $p, $s) {
        $stmt = $this->db->prepare("INSERT INTO productos (nombre, descripcion, precio, stock) VALUES (?,?,?,?)");
        return $stmt->execute([$n, $d, $p, $s]);
    }

    public function actualizar($id, $n, $d, $p, $s) {
        $stmt = $this->db->prepare("UPDATE productos SET nombre=?, descripcion=?, precio=?, stock=? WHERE id=?");
        return $stmt->execute([$n, $d, $p, $s, $id]);
    }

    public function eliminar($id) {
        $stmt = $this->db->prepare("DELETE FROM productos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}