<?php
// Incluye el archivo de configuracion
require_once "config.php";
// Define variables e inicializa valores vacios
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
// Procesa el formulario de informaciòn cuando el formulario es enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valida nombre de usuario
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a email.";
    } else {
        // Prepara la consulta
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Vincular variables a la declaración preparada como parámetros
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Establecer parámetros
            $param_username = trim($_POST["username"]);

            // ejecutar la declaración preparada
            if (mysqli_stmt_execute($stmt)) {
                /* almacena resultados */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        // Cerrar declaración
        mysqli_stmt_close($stmt);
    }

    // Validar contraseña
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validar confirmar contraseña
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Verifique los errores de entrada antes de insertar en la base de datos
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        // Preparar una declaración de inserción
        $sql = "INSERT INTO users (username, password, token) VALUES (?, ?, ?)";
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Vincular variables a la declaración preparada como parámetros
            mysqli_stmt_bind_param(
                $stmt,
                "sss",
                $param_username,
                $param_password,
                $param_token
            );

            // Establecer parámetros
            $param_username = $username;
            $param_token = bin2hex(openssl_random_pseudo_bytes(6));

            // Crea un hash de contraseña
            $param_password = base64_encode($password);

            // Intento de ejecutar la declaración preparada
            if (mysqli_stmt_execute($stmt)) {
                // Redirigir a la página de inicio de sesión
                header("location: login.php");
                exit();
            } else {
                echo "Something went wrong. Please try again later.";
            }
        }
        // Cerrar declaración
        mysqli_stmt_close($stmt);
    }

    // Conexión cercana
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/form.css">
</head>

<body>
    <div class="wrapper">
        <h2>Registro de Clientes</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Nombre Completo</label>
                <input type="email" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Dirección</label>
                <input type="email" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Teléfono</label>
                <input type="email" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>No.Seguro</label>
                <input type="email" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Marca</label>
                <input type="email" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Modelo</label>
                <input type="email" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Color</label>
                <input type="email" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Placas</label>
                <input type="email" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>No.Identificación</label>
                <input type="email" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password;
                                                                                    ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirmar Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo
                                                                                            $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>¿Ya tienes una cuenta? <a href="login.php">Entre aquí</a>.</p>
        </form>
    </div>
</body>

</html>