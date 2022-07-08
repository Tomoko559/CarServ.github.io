<?php
/* Credenciales de la base de datos. Suponiendo que está ejecutando MySQL
servidor con configuración predeterminada (usuario 'root' sin contraseña) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'database');
/* Intento de conexión a la base de datos MySQL */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
function conectar()
{
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "database";
    try {
        $conn = new PDO(
            "mysql:host=$server;dbname=$db",
            $user,
            $password,
            [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]
        );
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
}
