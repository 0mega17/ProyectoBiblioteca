<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Panel de Administración</title>


    <link href="../ASSETS/CSS/app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
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

         
            <main class="content">
                <div class="container-fluid p-0">
                    <h1 class="h3 mb-3"><strong>Crear Usuario</strong></h1>

                    <div class="card">
                        <div class="card-body">
                          
                            <form id="formularioCrearUsuarios">
                                <label>Nombre completo</label>
                                <input type="text" class="form-control mb-3" name="nombreUsuario" placeholder="Ingrese sus nombres">

                                <label>Apellidos</label>
                                <input type="text" class="form-control mb-3" name="apellidoUsuario" placeholder="Ingrese sus apellidos">

                                <label>Email</label>
                                <input type="email" class="form-control mb-3" name="emailUsuario" placeholder="Ingrese su correo">

                                <label>Contraseña</label>
                                <input type="password" class="form-control mb-3" name="contrasenaUsuario" placeholder="Ingrese su contraseña">

                                <label>Rol</label>
                                <select class="form-select mb-3" name="rol">
                                    <option selected>Seleccione una opción</option>
                                    <option value="administrador">Administrador</option>
                                    <option value="cliente">Cliente</option>
                                </select>

                                <button type="submit" class="btn btn-success">Crear Usuario</button>
                            </form>
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


    <script src="../ASSETS/JS/app.js"></script>
    <script src="../ASSETS/JS/mostrarBotonesRol.js"></script>
    <script src="../ASSETS/JS/cerrarSesion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>