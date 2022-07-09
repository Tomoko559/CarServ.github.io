<?php
// Incluir archivo de configuración
require_once "config.php";
// Definir variables e inicializar con valores vacíos
$username = $password = "";
$username_err = $password_err = "";
// Procesamiento de datos del formulario cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Comprobar si el nombre de usuario está vacío
    if (empty(trim($_POST["username"]))) {
        $username_err = "Debe escribir su email.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Comprobar si la contraseña está vacía
    if (empty(trim($_POST["password"]))) {
        $password_err = "Es necesario un password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validar credenciales
    if (empty($username_err) && empty($password_err)) {
        // Preparar una declaración selecta
        $sql = "SELECT id, username, password,token FROM users WHERE username = ?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Vincular variables a la declaración preparada como parámetros
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Establecer parámetros
            $param_username = $username;

            // Intento de ejecutar la declaración preparada
            if (mysqli_stmt_execute($stmt)) {
                // Guardar resultado
                mysqli_stmt_store_result($stmt);

                // Verifique si existe el nombre de usuario, si es así, verifique la contraseña
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Vincular variables de resultado
                    mysqli_stmt_bind_result($stmt, $id, $username, $db_password, $usertoken);
                    if (mysqli_stmt_fetch($stmt)) {

                        if ($password == base64_decode($db_password)) {
                            $caducidad = $year = 60 * 60 * 24 * 365 + time();
                            setcookie('userCookie', $id, $caducidad, '/');
                            setcookie('userToken', $usertoken, $caducidad, '/');
                            // Redirigir al usuario a la página de bienvenida
                            header("location: ../index.php");
                        } else {
                            // Dmostrar un mensaje de error si la contraseña no es válida
                            $password_err = "El password no es válido.";
                        }
                    }
                } else {
                    // Mostrar un mensaje de error si el nombre de usuario no existe
                    $username_err = "No existe este usuario.";
                }
            } else {
                echo "Ha habido un error, inténtelo más tarde.";
            }
        }

        // Cerrar declaración
        mysqli_stmt_close($stmt);
    }

    // cerrar conexion
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Iniciar Seión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/form.css">
</head>

<body>
    <div class="wrapper">
        <h2>Acceso a Clientes</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="username" class="form-control" value="<?php echo
                                                                                $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>No tienes una cuenta? <a href="register.php">Registrarse</a>.</p>
            <p>Has olvidado tu contraseña? <a href="recuperar_pass.php">Recuperar
                    contraseña</a>.</p>
            
        </form>
    </div>
</body>

</html>