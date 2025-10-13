 <?php
    require_once '../MODEL/MySQL.php';
    header('Content-Type: application/json; charset=utf-8');
    $Mysql = new MySQL();
    $Mysql->conectar();
    session_start();
    if (
        $_SERVER["REQUEST_METHOD"] === "POST"  && isset($_POST['nombreUsuario']) && !empty($_POST['nombreUsuario'])
        && isset($_POST['apellidoUsuario']) && !empty($_POST['apellidoUsuario'])
        && isset($_POST['emailUsuario']) && !empty($_POST['emailUsuario'])
        && isset($_POST['contrasenaUsuario']) && !empty($_POST['contrasenaUsuario'])
    ) {
        // recolectar los datos para crear el nuevo usuario se almacenan y despues se sanitizan para evitar el Sql injection :3 
        $nombreNuevo = filter_input(INPUT_POST, 'nombreUsuario', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $apellidoNuevo = filter_input(INPUT_POST, 'apellidoUsuario', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $emailNuevo = $_POST['emailUsuario'];
        $contrasenaNueva = trim($_POST['contrasenaUsuario']);
        $emailNuevo = filter_var($emailNuevo, FILTER_SANITIZE_EMAIL);
        // se le da seguridad a la clave del usuario con el hash ante todo la calidad del sofware :3 
        $contrasenaEncriptada = password_hash($contrasenaNueva,PASSWORD_DEFAULT);
        // hacer la consulta la cual siempre creara una cuenta como tipo cliente :3 

        $consultaSql = "insert into usuario (nombreUsuario,apellidoUsuario,emailUsuario,contraseñaUsuario,tipouUsuario)
         values ('$nombreNuevo','$apellidoNuevo','$emailNuevo','$contrasenaEncriptada','cliente')";
        $resultado = $Mysql->efectuarConsulta($consultaSql);
        if ($resultado) {
    
            // aqui se le manda el json con su valor 
           echo json_encode(
                [
                    "susses" => true,

                ]
            );
        } else {
            // lo mismo pero al reves para motrar si algo fallo :3
           echo json_encode(
                [
                    "susses" => false,
                ]
            );
        }
    }
$Mysql -> desconectar();
    ?>
