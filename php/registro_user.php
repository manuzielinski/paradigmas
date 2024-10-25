<?php
include '../php/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO usuarios (nombre, email, edad, contraseña) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);

    try {
        $stmt->execute([$name, $email, $age, $hashed_password]);
        
        echo "
        <script>
        alert('¡Usuario creado correctamente!');
        window.location.href='../index.php';
        </script>
        ";
    } catch (PDOException $e) {
        echo "
        <script>
        alert('Error: " . $e->getMessage() . "');
        window.location.href='../register.php';
        </script>
        ";
    }
}
?>
