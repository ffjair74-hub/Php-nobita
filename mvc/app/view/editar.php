<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto - TechStore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-warning text-dark text-center py-3">
                        <h4 class="mb-0">Actualizar Producto</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="index.php?controller=producto&action=update" method="POST">
                            <input type="hidden" name="id" value="<?= $producto->id ?>">

                            <div class="mb-3">
                                <label class="form-label fw-bold">Nombre</label>
                                <input type="text" name="nombre" class="form-control" value="<?= $producto->nombre ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Descripción</label>
                                <textarea name="descripcion" class="form-control" rows="3"><?= $producto->descripcion ?></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Precio ($)</label>
                                    <input type="number" step="0.01" name="precio" class="form-control" value="<?= $producto->precio ?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-bold">Stock</label>
                                    <input type="number" name="stock" class="form-control" value="<?= $producto->stock ?>" required>
                                </div>
                            </div>

                            <div class="d-grid gap-2 mt-4">
                                <button type="submit" class="btn btn-warning btn-lg">Actualizar Cambios</button>
                                <a href="index.php?controller=producto&action=index" class="btn btn-light">Volver al listado</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>