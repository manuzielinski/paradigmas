<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha del Producto - Smoke Society</title>
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/producto.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <?php include '../includes/header2.php'; ?>

    <div class="product-container">
        <div class="product-details">
            <div class="product-image">
                <img src="../assets/images/Nikbar4000.jpeg" alt="Nikbar4000">
            </div>
            <div class="product-info">
                <h1>ElfBar 4000</h1>
                <h2>$19000</h2>
                <p>Adquiere tu producto Elfbar ahora mismo y hazte miembro de la comunidad mas geek</p>
                <h3>Sabores Disponibles:</h3>
                <div class="flavors">
                    <button class="flavor-btn" data-flavor="BLUE STRAWBERRY CAKE">BLUE STRAWBERRY CAKE</button>
                    <button class="flavor-btn" data-flavor="CAPUCCINO">CAPUCCINO</button>
                    <button class="flavor-btn" data-flavor="GRAPE HONEY">GRAPE HONEY</button>
                    <button class="flavor-btn" data-flavor="PINK LEMONADE">PINK LEMONADE</button>
                    <button class="flavor-btn" data-flavor="TOBACCO VIRGINIA">TOBACCO VIRGINIA</button>
                </div>

                <label for="quantity">Cantidad:</label>
                <input type="number" id="quantity" name="quantity" min="1" value="1">

                <p id="selectedFlavor"></p>
                <button href="comprar.html" id="buyButton">Comprar</button>
                <br>
                <p id="purchaseStatus"></p>
            </div>
        </div>
    </div>

    <?php include '../includes/footer.php'; ?>

    <script src="../scripts/burguerAnimation.js"></script>
    <script src="../scripts/flavor.js"></script>
</body>

</html>
