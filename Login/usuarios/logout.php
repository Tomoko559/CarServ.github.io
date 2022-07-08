<?php
// Inicializar la sesión
session_start();
// Desarmar todas las variables de sesión
$_SESSION = array();
// Destruye la sesión.
session_destroy();
//borramos las cookies();
setcookie("userCookie","", time() - 3600, "/");
setcookie("userToken", "", time() - 3600, "/");
// Redirigir a la página de inicio de sesión
header("location: login.php");
exit;
