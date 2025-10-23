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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

          <!-- 📊 Gráfico de libros -->
          <div class="row mt-4">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title mb-0">Gráfico de Libros Disponibles</h5>
                </div>
                <div class="card-body">
                  <canvas id="librosChart" height="120"></canvas>
                </div>
              </div>
            </div>
          </div>

          <!-- Mensaje de bienvenida -->
          <div class="row mt-4">
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
  </div>

  <script src="../ASSETS/JS/app.js"></script>

  <!-- 📊 Script del gráfico -->
  <script>
    const ctx = document.getElementById('librosChart').getContext('2d');
    const librosChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Historia', 'Ciencia', 'Novela', 'Infantil', 'Educación'],
        datasets: [{
          label: 'Cantidad de Libros',
          data: [35, 25, 50, 20, 15], // 📌 Reemplaza estos valores con datos reales
          backgroundColor: 'rgba(13, 110, 253, 0.7)',
          borderColor: 'rgba(13, 110, 253, 1)',
          borderWidth: 1,
          borderRadius: 6
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: true, position: 'top' },
          title: { display: true, text: 'Distribución de Libros por Categoría' }
        },
        scales: {
          y: { beginAtZero: true }
        }
      }
    });
  </script>
</body>

</html>
