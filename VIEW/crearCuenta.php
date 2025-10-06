<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

    <title>Sign Up | AdminKit Demo</title>

    <link href="../ASSETS/CSS/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">



                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                
                                    <form  action="../CONTROLLER/controladorCrearUsuario.php" method="post">
                                        <div class="mb-3">
                                            <label class="form-label">Nombre completo</label>
                                            <input class="form-control form-control-lg" type="text" name="nombreUsuario" placeholder="Introduce tu nombre" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Apellidos</label>
                                            <input class="form-control form-control-lg" type="text" name="apellidoUsuario" placeholder="Introduce tus apellidos" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="emailUsuario" placeholder="Introduce su correo" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Contraseña</label>
                                            <input class="form-control form-control-lg" type="password" name="contrasenaUsuario" placeholder="Introduce la contraseña" />
                                        </div>
                                        <div class="d-grid gap-2 mt-3">
                                            <button type="submit" href="./index.php" class="btn btn-lg btn-primary">Entrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            ¿Ya tienes cuenta? <a href="./login.php">
                                acceso</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/app.js"></script>

</body>

</html>