<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>TechStore - Inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <h2>Gestión de Inventario</h2>
            <a href="index.php?action=create" class="btn btn-primary">+ Nuevo Producto</a>
        </div>

        <table class="table table-white table-hover shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>ID</th><th>Producto</th><th>Precio</th><th>Stock</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($productos)): ?>
                    <?php foreach($productos as $p): ?>
                    <tr>
                        <td><?= $p->id ?></td>
                        <td><strong><?= $p->nombre ?></strong></td>
                        <td>$<?= number_format($p->precio, 2) ?></td>
                        <td><?= $p->stock ?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?= $p->id ?>" class="btn btn-sm btn-warning">Editar</a>
                            <a href="index.php?action=delete&id=<?= $p->id ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Borrar producto?')">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>