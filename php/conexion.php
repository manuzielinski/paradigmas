<?php
try {
    // Datos de conexión de Railway usando MYSQL_PUBLIC_URL
    $host = 'autorack.proxy.rlwy.net';
    $port = 42220;
    $dbname = 'railway';
    $username = 'root';
    $password = 'wngBdutlxUPwGwECCtkIRdNdPYdLwZvE';

    // Configuración de PDO con los datos de Railway
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Error de conexión: ' . $e->getMessage());
}
?>
