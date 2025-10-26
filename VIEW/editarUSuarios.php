<?php
require_once("../MODEL/MySQL.php");
session_start();

$mysql = new MySQL();
$mysql->conectar();
$conexion = $mysql->getConnection();

// Si llega desde usuarios.php con un id en la URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM usuario WHERE idUsuario = '$id'";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
    } else {
        die("Usuario no encontrado");
    }
}
// Si no hay id, carga los datos de la sesión (perfil propio)
else {
    $usuario = [
        'idUsuario' => $_SESSION['idUsuario'],
        'nombreUsuario' => $_SESSION['nombreUsuario'],
        'apellidoUsuario' => $_SESSION['apellidoUsuario'],
        'emailUsuario' => $_SESSION['emailUsuario'],
        'tipouUsuario' => $_SESSION['tipouUsuario']
    ];
}

$mysql->desconectar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Usuario</title>
  <link rel="stylesheet" href="../ASSETS/CSS/app.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="wrapper">
  <!-- Sidebar -->
  <nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
      <a class="sidebar-brand" href="index.php">
        <span class="align-middle">Administrador</span>
      </a>

      <ul class="sidebar-nav">
        <li class="sidebar-header">Páginas</li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="index.php"><i class="align-middle" data-feather="home"></i> Dashboard</a>
        </li>

        <li class="sidebar-item">
          <a class="sidebar-link" href="perfil.php"><i class="align-middle" data-feather="user"></i> Perfil</a>
        </li>

        <li class="sidebar-item active">
          <a class="sidebar-link" href="usuarios.php"><i class="align-middle" data-feather="users"></i> Usuarios</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /Sidebar -->

  <div class="main">
    <main class="content">
      <div class="container-fluid p-0">
        <h1 class="h3 mb-3"><strong>Editar Usuario</strong></h1>

        <div class="row">
          <div class="col-md-8 col-lg-6">
            <div class="card">
              <div class="card-body">
                <form method="POST" action="../CONTROLLER/editarUsuario.php">
                  <input type="hidden" name="idUsuario" value="<?= htmlspecialchars($usuario['idUsuario']); ?>">

                  <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombreUsuario" class="form-control" value="<?= htmlspecialchars($usuario['nombreUsuario']); ?>" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Apellido</label>
                    <input type="text" name="apellidoUsuario" class="form-control" value="<?= htmlspecialchars($usuario['apellidoUsuario']); ?>" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Correo Electrónico</label>
                    <input type="email" name="emailUsuario" class="form-control" value="<?= htmlspecialchars($usuario['emailUsuario']); ?>" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Tipo de Usuario</label>
                    <select name="tipouUsuario" class="form-select" required>
                      <option value="Administrador" <?= ($usuario['tipouUsuario'] == 'Administrador') ? 'selected' : ''; ?>>Administrador</option>
                      <option value="Usuario" <?= ($usuario['tipouUsuario'] == 'Usuario') ? 'selected' : ''; ?>>Usuario</option>
                    </select>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <a href="usuarios.php" class="btn btn-secondary">Cancelar</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>
</div>

<script src="../ASSETS/JS/app.js"></script>
</body>
</html>
