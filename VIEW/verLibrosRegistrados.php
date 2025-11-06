<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Libros | Biblioteca</title>

    
    <link href="../ASSETS/CSS/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
      
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <ul class="sidebar-nav" id="menu">
                    <li class="sidebar-header">Bienvenido</li>
                </ul>
            </div>
        </nav>

      
        <div class="main">
            
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                
                                <span class="text-dark">Usuario</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" id="btnCerrarSesion">Cerrar sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

      
            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3">Listado de Libros</h1>
                    <div class="card">
                        <div class="card-body">
                            <table id="tablaInformacionLibros" class="table table-hover table-striped table-bordered text-center align-middle shadow-sm">
                                <thead>
                                    <tr>
                                        <th>Titulo</th>
                                        <th>Autor</th>
                                        <th>ISBN</th>
                                        <th>Categoría</th>
                                        <th>Disponibilidad</th>
                                        <th>Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody id="cuerpoTabla"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

  
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0"> Biblioteca</p>
                        </div>
                        <div class="col-6 text-end">
                            <span class="text-muted">Sistema de Gestión de Libros</span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../ASSETS/JS/mostrarBotonesRol.js"></script>
    <script src="../ASSETS/JS/mostrarLibros.js"></script>
    <script src="../ASSETS/JS/app.js"></script>
    <script src="../ASSETS/JS/cerrarSesion.js"></script>
</body>

</html>