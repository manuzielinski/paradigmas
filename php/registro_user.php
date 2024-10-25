<?php
include '../php/conexion.php'; // Asegúrate de que la ruta es correcta

// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];

    // Hash de la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepara la consulta SQL
    $query = "INSERT INTO usuarios (nombre, email, edad, contraseña) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);

    try {
        // Ejecuta la consulta
        $stmt->execute([$name, $email, $age, $hashed_password]);
        
        // Mostrar mensaje de éxito y redirigir al índice
        echo "
        <script>
        alert('¡Usuario creado correctamente!');
        window.location.href='../index.php';
        </script>
        ";
    } catch (PDOException $e) {
        // Manejo de errores
        echo "
        <script>
        alert('Error: " . $e->getMessage() . "');
        window.location.href='../register.php';
        </script>
        ";
    }
}
?>
