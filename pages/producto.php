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

    <?php include '../includes/header.php'; ?>

    <div class="product-container">
        <?php
        $product = isset($_GET['product']) ? $_GET['product'] : '';
        $products = [
            'nikbar4000' => ['name' => 'Nikbar 4000', 'price' => '19000 ARS', 'image' => 'Nikbar4000.jpeg', 'description' => 'Adquiere tu producto Elfbar ahora mismo y hazte miembro!'],
            'nikbar1500' => ['name' => 'Nikbar 1500', 'price' => '9000 ARS', 'image' => 'Nikbar1500.jpeg', 'description' => 'Adquiere tu producto Elfbar ahora mismo y hazte miembro!'],
            'nikbar2500' => ['name' => 'Nikbar 2500', 'price' => '14000 ARS', 'image' => 'Nikbar2500.jpeg', 'description' => 'Adquiere tu producto Elfbar ahora mismo y hazte miembro!'],
            'nikbar6000' => ['name' => 'Nikbar 6000', 'price' => '25000 ARS', 'image' => 'Nikbar6000.jpeg', 'description' => 'Adquiere tu producto Elfbar ahora mismo y hazte miembro!'],
            'geekbar5000' => ['name' => 'Geekbar 5000', 'price' => '20000 ARS', 'image' => 'Geekbar5000.jpeg', 'description' => 'Adquiere tu producto Elfbar ahora mismo y hazte miembro!'],
            'mamma_pro_1000' => ['name' => 'Mamma Pro 1000', 'price' => '5500 ARS', 'image' => 'MammaPro1000.jpeg', 'description' => 'Adquiere tu producto Elfbar ahora mismo y hazte miembro!'],
            'mask_king_8000' => ['name' => 'Mask King 8000', 'price' => '27000 ARS', 'image' => 'MaskKing8000.jpeg', 'description' => 'Adquiere tu producto Elfbar ahora mismo y hazte miembro!'],
            'nikbar8000' => ['name' => 'Nikbar 8000', 'price' => '16000 ARS', 'image' => 'Nikbar8000.jpeg', 'description' => 'Adquiere tu producto Elfbar ahora mismo y hazte miembro!'],
            'dozeup_600' => ['name' => 'DozeUp 600', 'price' => '7000 ARS', 'image' => 'DozeUp600.jpeg', 'description' => 'Adquiere tu producto Elfbar ahora mismo y hazte miembro!']
        ];
        if (array_key_exists($product, $products)) {
            $prod = $products[$product];
            ?>
            <div class="product-details">
                <div class="product-image">
                    <img src="../assets/images/<?php echo $prod['image']; ?>" alt="<?php echo $prod['name']; ?>">
                </div>
                <div class="product-info">
                    <h1><?php echo $prod['name']; ?></h1>
                    <h2><?php echo $prod['price']; ?></h2>
                    <p><?php echo $prod['description']; ?></p>
                    <a href="comprar.php?product=<?php echo $product; ?>" class="btn-buy">
                        <button type="button">Comprar Ahora</button>
                    </a>
                </div>
            </div>
            <?php
        } else {
            echo "<p>Producto no encontrado.</p>";
        }
        ?>
    </div>

    <?php include '../includes/footer.php'; ?>

</body>
</html>
