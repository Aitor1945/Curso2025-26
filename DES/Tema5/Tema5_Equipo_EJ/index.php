<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

<div class="card p-4 shadow" style="width: 22rem;">
  <h3 class="text-center mb-3">Iniciar sesión</h3>

  <form action="validar.php" method="POST">
    <div class="mb-3">
      <label class="form-label">Usuario</label>
      <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" name="contrasena" class="form-control" required>
    </div>
    <button class="btn btn-primary w-100" type="submit">Entrar</button>
  </form>

  <div class="text-center mt-3">
    <a href="registro.php">¿No tienes cuenta? Regístrate</a>
  </div>
</div>

</body>
</html>
