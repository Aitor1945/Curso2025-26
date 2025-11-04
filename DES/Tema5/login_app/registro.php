<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

<div class="card p-4 shadow" style="width: 25rem;">
  <h3 class="text-center mb-4">Registro de usuario</h3>

  <form action="registrar_usuario.php" method="POST">
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre de usuario</label>
      <input type="text" name="nombre" id="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="contrasena" class="form-label">Contraseña</label>
      <input type="password" name="contrasena" id="contrasena" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success w-100">Registrar</button>
  </form>

  <div class="text-center mt-3">
    <a href="index.php">Volver al login</a>
  </div>
</div>

</body>
</html>
