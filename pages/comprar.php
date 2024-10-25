<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar - Smoke Society</title>
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/comprar.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <?php 
    include '../includes/header2.php'; 
    include '../php/conexion.php';

    $mensaje_exito = '';

    if (!$pdo) {
        die('Error: No se pudo establecer conexión a la base de datos.');
    }

    // obtener datos del form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['name'];
        $direccion = $_POST['address'];
        $telefono = $_POST['phone'];
        $email = $_POST['email'];
        $metodo_pago = $_POST['payment'];
        $producto_id = $_POST['product'];

        try {
            $pdo->beginTransaction();

            $stmt_cliente = $pdo->prepare("INSERT INTO clientes (nombre, direccion, telefono, email) VALUES (?, ?, ?, ?)
                                            ON DUPLICATE KEY UPDATE nombre = ?, direccion = ?, telefono = ?");
            $stmt_cliente->execute([$nombre, $direccion, $telefono, $email, $nombre, $direccion, $telefono]);
            $cliente_id = $pdo->lastInsertId();
            $stmt_pedido = $pdo->prepare("INSERT INTO pedidos (cliente_id, producto_id, medio_pago) VALUES (?, ?, ?)");
            $stmt_pedido->execute([$cliente_id, $producto_id, $metodo_pago]);
            
            $pdo->commit(); // confirmar la transaccion
            $mensaje_exito = "¡Compra realizada con éxito!";
        } catch (Exception $e) {
            $pdo->rollBack(); // revert
            $mensaje_exito = "Error al realizar la compra: " . $e->getMessage();
        }
    }
    ?>

    <div class="Forms-container">
        <h1>Formulario de Compra</h1>
        <?php if ($mensaje_exito): ?>
            <div class="success-message">
                <p><?php echo $mensaje_exito; ?></p>
            </div>
        <?php endif; ?>

        <form action="comprar.php" method="post">
            <div class="form-group">
                <label for="name">Nombre del Cliente:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Dirección:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="phone">Teléfono:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="payment">Medio de Pago:</label>
                <select id="payment" name="payment" required>
                    <option value="credit_card">Tarjeta de Crédito</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank_transfer">Transferencia Bancaria</option>
                </select>
            </div>
            <div class="form-group">
                <label for="product">Producto:</label>
                <select id="product" name="product" required>
                    <?php
                    // productos de la db
                    $stmt_productos = $pdo->query("SELECT id, nombre, sabor FROM productos");
                    while ($row = $stmt_productos->fetch(PDO::FETCH_ASSOC)) {
                        echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['nombre']) . ' - ' . htmlspecialchars($row['sabor']) . '</option>';
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn-submit">Enviar Pedido</button>
        </form>
    </div>

    <?php include '../includes/footer.php'; ?>
    <script src="../scripts/burguerAnimation.js"></script>

</body>
</html>
