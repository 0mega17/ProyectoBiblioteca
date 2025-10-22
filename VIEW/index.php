<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Panel principal del sistema de biblioteca" />
  <meta name="author" content="Cristoffer Jaramillo" />

  <title>Biblioteca - Panel Principal</title>

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

          <li class="sidebar-item active">
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

          <li class="sidebar-item">
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
          <h1 class="h3 mb-3"><strong>Panel Principal</strong> - Sistema de Biblioteca</h1>

          <!-- Tarjetas de resumen -->
          <div class="row">
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Libros Registrados</h5>
                  <h1 class="mt-1 mb-3">150</h1>
                  <div class="mb-1 text-muted">Total en inventario</div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Usuarios Registrados</h5>
                  <h1 class="mt-1 mb-3">45</h1>
                  <div class="mb-1 text-muted">Administradores y Clientes</div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Reservas Activas</h5>
                  <h1 class="mt-1 mb-3">12</h1>
                  <div class="mb-1 text-muted">Pendientes de aprobación</div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Préstamos en Curso</h5>
                  <h1 class="mt-1 mb-3">8</h1>
                  <div class="mb-1 text-muted">Libros prestados actualmente</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Mensaje de bienvenida -->
          <div class="row">
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
              <div class="card flex-fill">
                <div class="card-header">
                  <h5 class="card-title mb-0">Bienvenido al sistema de gestión de biblioteca</h5>
                </div>
                <div class="card-body">
                  <p>
                    Desde este panel podrás acceder a todas las funcionalidades principales del sistema:
                  </p>
                  <ul>
                    <li>Administrar usuarios (clientes y administradores).</li>
                    <li>Gestionar el inventario de libros.</li>
                    <li>Revisar y aprobar reservas de clientes.</li>
                    <li>Registrar préstamos y devoluciones.</li>
                    <li>Generar informes en PDF y Excel.</li>
                  </ul>
                  <p>
                    Usa el menú lateral para navegar entre las secciones del sistema.
                  </p>
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
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Panel principal del sistema de biblioteca" />
  <meta name="author" content="Cristoffer Jaramillo" />

  <title>Biblioteca - Panel Principal</title>

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

          <li class="sidebar-item active">
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

          <li class="sidebar-item">
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
          <h1 class="h3 mb-3"><strong>Panel Principal</strong> - Sistema de Biblioteca</h1>

          <!-- Tarjetas de resumen -->
          <div class="row">
            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Libros Registrados</h5>
                  <h1 class="mt-1 mb-3">150</h1>
                  <div class="mb-1 text-muted">Total en inventario</div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Usuarios Registrados</h5>
                  <h1 class="mt-1 mb-3">45</h1>
                  <div class="mb-1 text-muted">Administradores y Clientes</div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Reservas Activas</h5>
                  <h1 class="mt-1 mb-3">12</h1>
                  <div class="mb-1 text-muted">Pendientes de aprobación</div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Préstamos en Curso</h5>
                  <h1 class="mt-1 mb-3">8</h1>
                  <div class="mb-1 text-muted">Libros prestados actualmente</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Mensaje de bienvenida -->
          <div class="row">
            <div class="col-12 col-lg-8 col-xxl-9 d-flex">
              <div class="card flex-fill">
                <div class="card-header">
                  <h5 class="card-title mb-0">Bienvenido al sistema de gestión de biblioteca</h5>
                </div>
                <div class="card-body">
                  <p>
                    Desde este panel podrás acceder a todas las funcionalidades principales del sistema:
                  </p>
                  <ul>
                    <li>Administrar usuarios (clientes y administradores).</li>
                    <li>Gestionar el inventario de libros.</li>
                    <li>Revisar y aprobar reservas de clientes.</li>
                    <li>Registrar préstamos y devoluciones.</li>
                    <li>Generar informes en PDF y Excel.</li>
                  </ul>
                  <p>
                    Usa el menú lateral para navegar entre las secciones del sistema.
                  </p>
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
