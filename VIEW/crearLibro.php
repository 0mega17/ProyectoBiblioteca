<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registrar Libro | Biblioteca</title>


    <link href="../ASSETS/CSS/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
       
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <ul class="sidebar-nav" id="menu">
                    <li class="sidebar-header">Biblioteca</li>
                  
                </ul>
            </div>
        </nav>

        <div class="main">
            <!-- Navbar -->
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                Opciones
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
                    <h1 class="h3 mb-3"><strong>Registrar nuevo libro</strong></h1>

                    <div class="card">
                        <div class="card-body">
                            <form id="formularioCrearLibro">
                                <div class="mb-3">
                                    <label class="form-label">Título</label>
                                    <input type="text" class="form-control" name="tituloLibro" placeholder="Ingrese título">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Autor</label>
                                    <input type="text" class="form-control" name="autorLibro" placeholder="Ingrese autor">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">ISBN</label>
                                    <input type="text" class="form-control" name="isbnLibro" id="isbnLibro" placeholder="Ingrese ISBN">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Categoría</label>
                                    <input type="text" class="form-control" name="categoriaLibro" placeholder="Ingrese categoría">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Disponibilidad</label>
                                    <input type="text" class="form-control" name="disponibilidadLibro" placeholder="Ejemplo: Disponible / Prestado">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Cantidad de copias</label>
                                    <input type="number" class="form-control" name="cantidadLibro" placeholder="Ingrese cantidad">
                                </div>

                                <button type="submit" class="btn btn-success">Guardar libro</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>

            
            <footer class="footer">
                <div class="container-fluid text-center">
                    <span class="text-muted">© Biblioteca 2025</span>
                </div>
            </footer>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../ASSETS/JS/app.js"></script>
    <script src="../ASSETS/JS/alertaIngresarLibro.js"></script>
    <script src="../ASSETS/JS/mostrarBotonesRol.js"></script>
    <script src="../ASSETS/JS/cerrarSesion.js"></script>
</body>

</html>