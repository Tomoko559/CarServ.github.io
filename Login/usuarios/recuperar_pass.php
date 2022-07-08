<?php
// Incluir archivo de configuración
require_once "config.php";
// Definir variables e inicializar con valores vacíos
$username_err = "";
// Procesamiento de datos del formulario cuando se envía el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $link->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $_POST['username']);
    $stmt->execute();
    $result = $stmt->get_result();
    // Comprobar si el nombre de usuario está vacío
    if ($result->num_rows === 0) {
        $username_err = "Este email no existe.";
    } else {
        $row = $result->fetch_assoc();
        $email = $row['username'];

        $password = base64_decode($row['password']);
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/form.css">
</head>

<body>
    <div class="wrapper">
        <h2>Recuperar Contraseña</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="username" class="form-control">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Recover">
                <a type="reset" href="login.php" class="btn btn-default">Volver</a>
            </div>
        </form>
    </div>
</body>

</html>