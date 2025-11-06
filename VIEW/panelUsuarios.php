<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Usuarios | Panel Admin</title>

  
    <link href="../ASSETS/CSS/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
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
                                <span class="text-dark">Opciones</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" id="btnPerfil">Perfil</a>
                                <a class="dropdown-item" id="btnCerrarSesion">Cerrar sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido -->
            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3"><strong>Usuarios Registrados</strong></h1>

                    <div class="card">
                        <div class="card-body">
                            <table id="tablaInformacionUsuarios" class="display table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Email</th>
                                        <th>Tipo Usuario</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="cuerpoTabla">
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </main>

   
            <footer class="footer">
                <div class="container-fluid">
                    <div class="text-center text-muted">
                        © Biblioteca 2025
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="../ASSETS/JS/app.js"></script>
    <script src="../ASSETS/JS/mostrarDatosUsuarios.js"></script>
    <script src="../ASSETS/JS/mostrarBotonesRol.js"></script>
    <script src="../ASSETS/JS/cerrarSesion.js"></script>

</body>

</html>