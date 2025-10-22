<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Gestión de usuarios del sistema de biblioteca" />
  <meta name="author" content="Ejemplo Desarrollador" />

  <title>Biblioteca - Usuarios</title>

  <link rel="shortcut icon" href="../ASSETS/IMG/icono.png" />
  <link href="../ASSETS/CSS/app.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
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
            <a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="home"></i>
              <span class="align-middle">Dashboard</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="perfil.php">
              <i class="align-middle" data-feather="user"></i>
              <span class="align-middle">Perfil</span>
            </a>
          </li>

          <li class="sidebar-header">Gestión del Sistema</li>

          <li class="sidebar-item active">
            <a class="sidebar-link" href="usuarios.php">
              <i class="align-middle" data-feather="users"></i>
              <span class="align-middle">Usuarios</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="libros.php">
              <i class="align-middle" data-feather="book"></i>
              <span class="align-middle">Libros</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="reservas.php">
              <i class="align-middle" data-feather="calendar"></i>
              <span class="align-middle">Reservas</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="prestamos.php">
              <i class="align-middle" data-feather="book-open"></i>
              <span class="align-middle">Préstamos</span>
            </a>
          </li>

          <li class="sidebar-header">Reportes y Configuración</li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="informes.php">
              <i class="align-middle" data-feather="bar-chart-2"></i>
              <span class="align-middle">Informes</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="notificaciones.php">
              <i class="align-middle" data-feather="bell"></i>
              <span class="align-middle">Notificaciones</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="configuracion.php">
              <i class="align-middle" data-feather="settings"></i>
              <span class="align-middle">Configuración</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /Sidebar -->

    <!-- Contenido principal -->
    <div class="main">
      <main class="content">
        <div class="container-fluid p-0">
          <h1 class="h3 mb-3"><strong>Gestión de Usuarios</strong></h1>

          <div class="row">
            <!-- FORMULARIO DE REGISTRO -->
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">Registrar Nuevo Usuario</h5>
                </div>
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label class="form-label">Nombre</label>
                      <input type="text" class="form-control" placeholder="Ej: Ana Gómez" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Correo</label>
                      <input type="email" class="form-control" placeholder="Ej: ana@example.com" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Rol</label>
                      <select class="form-select">
                        <option value="">Seleccionar...</option>
                        <option value="admin">Administrador</option>
                        <option value="cliente">Cliente</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Contraseña</label>
                      <input type="password" class="form-control" placeholder="********" />
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Registrar Usuario</button>
                  </form>
                </div>
              </div>
            </div>

            <!-- TABLA DE USUARIOS -->
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="card-title mb-0">Lista de Usuarios</h5>
                  <button class="btn btn-sm btn-outline-primary">Actualizar</button>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-striped align-middle">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Ana Gómez</td>
                        <td>ana@example.com</td>
                        <td>Administrador</td>
                        <td>
                          <button class="btn btn-sm btn-warning">Editar</button>
                          <button class="btn btn-sm btn-danger">Eliminar</button>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Carlos Pérez</td>
                        <td>carlos@example.com</td>
                        <td>Cliente</td>
                        <td>
                          <button class="btn btn-sm btn-warning">Editar</button>
                          <button class="btn btn-sm btn-danger">Eliminar</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <!-- Footer -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-start">
              <p class="mb-0">
                <strong>Sistema Biblioteca</strong> &copy; 2025
              </p>
            </div>
            <div class="col-6 text-end">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="text-muted" href="#">Ayuda</a>
                </li>
                <li class="list-inline-item">
                  <a class="text-muted" href="#">Soporte</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- /Contenido principal -->
  </div>

  <script src="../ASSETS/JS/app.js"></script>
</body>
</html>
