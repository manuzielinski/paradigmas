<?php 
session_start(); // Inicia la sesión para almacenar la información del usuario
include '../php/conexion.php'; // Asegúrate de que la ruta es correcta

// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contraseña = $_POST['password'];

    // Consulta el usuario en la base de datos
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar si el usuario existe y la contraseña es correcta
    if ($usuario && password_verify($contraseña, $usuario['contraseña'])) {
        // Si las credenciales son correctas, inicia sesión
        $_SESSION['user_id'] = $usuario['id'];
        $_SESSION['user_name'] = $usuario['nombre'];
        header("Location: dashboard.php"); // Redirige a la página de éxito
        exit();
    } else {
        $mensaje_error = "Email o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/register.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>
<body>
    
    <?php include '../includes/header2.php'; ?>
    
    <div class="container-login">
        <div class="box form-box">

            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Correo</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                
                <?php if (isset($mensaje_error)): ?>
                    <div class="error-message" style="color: red;">
                        <p><?php echo $mensaje_error; ?></p>
                    </div>
                <?php endif; ?>

                <div class="links">
                    Eres Nuevo? <a href="register.php">Crea una Cuenta!</a>
                </div>
            </form>
        </div>
    </div>
    
    <?php include '../includes/footer.php'; ?>

    <script src="../scripts/burguerAnimation.js"></script>

</body>
</html>
