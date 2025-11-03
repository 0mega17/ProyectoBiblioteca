<?php
session_start();
session_unset(); // Elimina variables de sesión
session_destroy(); // Destruye la sesión

// Redirige al login
header("Location: ../VIEW/login.php");
exit();
