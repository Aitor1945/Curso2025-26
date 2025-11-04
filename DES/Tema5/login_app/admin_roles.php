<?php
include 'conexion.php';

// Verificar si el usuario está logueado y es admin
if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'Administrador') {
    die("<h3>Acceso denegado</h3><a href='index.php'>Volver al login</a>");
}

// Si se envió un cambio de rol
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nuevoRol = $_POST['rol'];
    $conn->query("UPDATE usuarios SET rol='$nuevoRol' WHERE id=$id");
}

$result = $conn->query("SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel de administración</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4 bg-light">
  <div class="container">
    <h2 class="mb-4">Gestión de roles</h2>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Rol actual</th>
          <th>Cambiar rol</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= htmlspecialchars($row['nombre']) ?></td>
          <td><?= htmlspecialchars($row['rol']) ?></td>
          <td>
            <form method="POST" class="d-flex gap-2">
              <input type="hidden" name="id" value="<?= $row['id'] ?>">
              <select name="rol" class="form-select form-select-sm">
                <option <?= $row['rol']=='Usuario'?'selected':'' ?>>Usuario</option>
                <option <?= $row['rol']=='Editor'?'selected':'' ?>>Editor</option>
                <option <?= $row['rol']=='Moderador'?'selected':'' ?>>Moderador</option>
                <option <?= $row['rol']=='Administrador'?'selected':'' ?>>Administrador</option>
              </select>
              <button class="btn btn-sm btn-primary">Guardar</button>
            </form>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href="index.php" class="btn btn-secondary mt-3">Cerrar sesión</a>
  </div>
</body>
</html>

<?php $conn->close(); ?>
