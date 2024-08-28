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

    <?php include '../includes/header.php'; ?>

    <div class="Forms-container">
        <h1>Formulario de Compra</h1>
        <form action="procesar_compra.php" method="post">
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
                <?php
                $product = isset($_GET['product']) ? htmlspecialchars($_GET['product']) : 'No especificado';
                ?>
                <input type="text" id="product" name="product" value="<?php echo $product; ?>" readonly>
            </div>
            <button type="submit">Enviar Pedido</button>
        </form>
    </div>

    <?php include '../includes/footer.php'; ?>

</body>
</html>
