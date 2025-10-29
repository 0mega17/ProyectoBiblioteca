<?php
class MySQL
{
    private $ipServidor = "localhost";
    private $usuarioBase = "root";
    private $contrasena = "";
    private $nombreBaseDatos = "Proyecto_Biblioteca";

    private $conexion;

    // conectar a la base de datos
    public function conectar()
    {
        $this->conexion = mysqli_connect(
            $this->ipServidor,
            $this->usuarioBase,
            $this->contrasena,
            $this->nombreBaseDatos
        );

        if (!$this->conexion) {
            die("Error al conectar a la base de datos: " . mysqli_connect_error());
        }

        mysqli_set_charset($this->conexion, "utf8");
    }

    // desconectar
    public function desconectar()
    {
        if ($this->conexion) {
            mysqli_close($this->conexion);
        }
    }

    //  obtener la conexión
    public function getConnection()
    {
        return $this->conexion;
    }

    // Ejecutar consultas
    public function efectuarConsulta($consulta)
    {
        mysqli_query($this->conexion, "SET NAMES 'utf8'");
        mysqli_query($this->conexion, "SET CHARACTER SET 'utf8'");

        $resultado = mysqli_query($this->conexion, $consulta);

        if (!$resultado) {
            die("<b>Error en la consulta:</b> " . mysqli_error($this->conexion) . "<br><b>Consulta:</b> " . htmlspecialchars($consulta));
        }

        return $resultado;
    }
}
