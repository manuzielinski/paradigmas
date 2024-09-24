<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos - Smoke Society</title>
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/listado_tabla.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        setInterval(function(){location.reload(true);}, 2000);
    </script>
</head>
<body>

    <?php include '../includes/header.php'; ?>

    <div class="container">
        <h1>Listado de Productos</h1>
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="../assets/images/Nikbar4000.jpeg" alt="Nikbar 4000"></td>
                    <td>Nikbar 4000</td>
                    <td>$19000 ARS</td>
                    <td><a href="producto.php?product=nikbar4000">Comprar</a></td>
                </tr>
                <tr>
                    <td><img src="../assets/images/Nikbar1500.jpeg" alt="Nikbar 1500"></td>
                    <td>Nikbar 1500</td>
                    <td>$9000 ARS</td>
                    <td><a href="producto.php?product=nikbar1500">Comprar</a></td>
                </tr>
                <tr>
                    <td><img src="../assets/images/Nikbar2500.jpeg" alt="Nikbar 2500"></td>
                    <td>Nikbar 2500</td>
                    <td>$14000 ARS</td>
                    <td><a href="producto.php?product=nikbar2500">Comprar</a></td>
                </tr>
                <tr>
                    <td><img src="../assets/images/Nikbar6000.jpeg" alt="Nikbar 6000"></td>
                    <td>Nikbar 6000</td>
                    <td>$25000 ARS</td>
                    <td><a href="producto.php?product=nikbar6000">Comprar</a></td>
                </tr>
                <tr>
                    <td><img src="../assets/images/Geekbar5000.jpeg" alt="Geekbar 5000"></td>
                    <td>Geekbar 5000</td>
                    <td>$20000 ARS</td>
                    <td><a href="producto.php?product=geekbar5000">Comprar</a></td>
                </tr>
                <tr>
                    <td><img src="../assets/images/MammaPro1000.jpeg" alt="Mamma Pro 1000"></td>
                    <td>Mamma Pro 1000</td>
                    <td>$5500 ARS</td>
                    <td><a href="producto.php?product=mamma_pro_1000">Comprar</a></td>
                </tr>
                <tr>
                    <td><img src="../assets/images/MaskKing8000.jpeg" alt="Mask King 8000"></td>
                    <td>Mask King 8000</td>
                    <td>$27000 ARS</td>
                    <td><a href="producto.php?product=mask_king_8000">Comprar</a></td>
                </tr>
                <tr>
                    <td><img src="../assets/images/Nikbar8000.jpeg" alt="Nikbar 8000"></td>
                    <td>Nikbar 8000</td>
                    <td>$16000 ARS</td>
                    <td><a href="producto.php?product=nikbar8000">Comprar</a></td>
                </tr>
                <tr>
                    <td><img src="../assets/images/DozeUp600.jpeg" alt="DozeUp 600"></td>
                    <td>DozeUp 600</td>
                    <td>$7000 ARS</td>
                    <td><a href="producto.php?product=dozeup_600">Comprar</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php include '../includes/footer.php'; ?>

</body>
</html>
