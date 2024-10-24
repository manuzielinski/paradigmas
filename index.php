<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoke Society</title>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link rel="stylesheet" href="assets/css/cards.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/popup.css">
    <link rel="stylesheet" href="assets/css/news.css">

</head>
<body>
    <script>
        setInterval(function() {
        location.reload();
    }, 2000); 

    </script>
    <?php include 'includes/header.php'; ?>

    <main>

        <div class="popup" id="reviewPopup">
            <div class="popup-content">
                <span class="close" id="closePopup">&times;</span>
                <h3>Nuestros Clientes!</h3>
                <img src="assets\images\resena1.png" alt="Reseña" style="width: 100%; border-radius: 8px; margin-bottom: 10px;"> <!-- Añade la imagen aquí -->
                <p>"Unite a una gran comunidad de personas libres de tabaco!"</p>
            </div>
        </div>
        
        
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="assets/images/carousel_imgV2.png" style="width: 100%">
            </div>
            <div class="mySlides fade">
                <img src="assets/images/carousel_imgV4.png" style="width: 100%">
            </div>
            
        
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>
        

        <h2 class="section-title">Dejar el cigarrillo es fácil y accesible!<br>Gracias a los vapers desechables 👇🏽</h2>
        <h2 class="section-title">Ordenar por:</h2>
        <select id="priceFilter">
            <option value="lowToHigh">Precio: Menor a Mayor</option>
            <option value="highToLow">Precio: Mayor a Menor</option>
        </select>

        <div class="container">
            <div class="card" data-price="19000">
                <div class="product-image">
                    <img src="assets/images/Nikbar4000.jpeg" alt="Nikbar 4000">
                </div>
                <div class="product-info">
                    <h3>Nikbar 4000</h3>
                    <h4>$19000 ARS</h4>
                </div>
                <div class="btn">
                    <a href="pages/producto.php" class="button-link">Comprar</a>
                </div>
            </div>
            <div class="card" data-price="29000">
                <div class="product-image">
                    <img src="assets/images/Elfbar10000.jpeg" alt="Elfbar 10000">
                </div>
                <div class="product-info">
                    <h3>Elfbar 10000</h3>
                    <h4>$29000 ARS</h4>
                </div>
                <div class="btn">
                    <a href="pages/producto.php" class="button-link">Comprar</a>
                </div>
            </div>
            <div class="card" data-price="14000">
                <div class="product-image">
                    <img src="assets/images/Nikbar2500.jpeg" alt="Nikbar 2500">
                </div>
                <div class="product-info">
                    <h3>Nikbar 2500</h3>
                    <h4>$14000 ARS</h4>
                </div>
                <div class="btn">
                    <a href="pages/producto.php" class="button-link">Comprar</a>
                </div>
            </div>
            <div class="card" data-price="25000">
                <div class="product-image">
                    <img src="assets/images/Nikbar6000.jpeg" alt="Nikbar 6000">
                </div>
                <div class="product-info">
                    <h3>Nikbar 6000</h3>
                    <h4>$25000 ARS</h4>
                </div>
                <div class="btn">
                    <a href="pages/producto.php" class="button-link">Comprar</a>
                </div>
            </div>
            <div class="card" data-price="20000">
                <div class="product-image">
                    <img src="assets/images/Geekbar5000.jpeg" alt="Geekbar 5000">
                </div>
                <div class="product-info">
                    <h3>Geekbar 5000</h3>
                    <h4>$20000 ARS</h4>
                </div>
                <div class="btn">
                    <a href="pages/producto.php" class="button-link">Comprar</a>
                </div>
            </div>
            <div class="card" data-price="5500">
                <div class="product-image">
                    <img src="assets/images/MammaPro1000.jpeg" alt="Mamma Pro 1000">
                </div>
                <div class="product-info">
                    <h3>Mamma Pro 1000</h3>
                    <h4>$5500 ARS</h4>
                </div>
                <div class="btn">
                    <a href="pages/producto.php" class="button-link">Comprar</a>
                </div>
            </div>
            <div class="card" data-price="27000">
                <div class="product-image">
                    <img src="assets/images/MaskKing8000.jpeg" alt="Mask King 8000">
                </div>
                <div class="product-info">
                    <h3>Mask King 8000</h3>
                    <h4>$27000 ARS</h4>
                </div>
                <div class="btn">
                    <a href="pages/producto.php" class="button-link">Comprar</a>
                </div>
            </div>
            <div class="card" data-price="16000">
                <div class="product-image">
                    <img src="assets/images/Nikbar8000.jpeg" alt="Nikbar 8000">
                </div>
                <div class="product-info">
                    <h3>Nikbar 8000</h3>
                    <h4>$16000 ARS</h4>
                </div>
                <div class="btn">
                    <a href="pages/producto.php" class="button-link">Comprar</a>
                </div>
            </div>
            <div class="card" data-price="7000">
                <div class="product-image">
                    <img src="assets/images/DozeUp600.jpeg" alt="DozeUp 600">
                </div>
                <div class="product-info">
                    <h3>DozeUp 600</h3>
                    <h4>$7000 ARS</h4>
                </div>
                <div class="btn">
                    <a href="pages/producto.php" class="button-link">Comprar</a>
                </div>
            </div>
        </div>

        <div class="about-section">
            <img src="assets/images/about.webp" alt="Sobre Nosotros">
            <div class="about-content">
                <h2>¡BIENVENIDOS A SmokeSociety!</h2>
                <p>
                    Si buscás cigarrillos electrónicos, vapes, vapos, vapers, ¡Acabás de encontrar la página número uno en el mercado!
                    ¡Ofrecemos novedad en vapes, liderando el camino de la moda! Vas a encontrar vapes de distintos diseños que combinen con tu estilo, 
                    tenemos los vapes más buscados en el mercado nacional e internacional, te garantizamos la mejor calidad, sabor y originalidad en nuestros productos.
                </p>
                <p>
                    ¡Te invitamos a formar parte de #SmokeSociety!
                </p>
            </div>
        </div>    
        
        <div class="news-section">
            <h2 class="section-title">Nuestro Blog!</h2>
            <div class="news-container">

                <div class="news-item">
                    <a href="/pages/noticia.php" class="news-image">
                        <img src="//indyargentina.com/cdn/shop/articles/historia-de-la-nicotina-712794.webp?v=1727191943" alt="Historia de la Nicotina" />
                    </a>
                    <div class="news-meta">
                        <span class="news-date"><time datetime="2024-09-23">2024-09-23</time></span>
                        <h3 class="news-title">
                            <a href="/pages/noticia.php">Historia de la Nicotina</a>
                        </h3>
                        <p class="news-excerpt">Quizás no conocías mucho sobre la nicotina, por eso aquí vamos a contarte un poquito de su historia y por qué es tan popular en la actualidad.</p>
                        <a href="/pages/noticia.php" class="btn1 btn--secondary btn--small">Leer más</a>
                    </div>
                </div>
        
                <div class="news-item">
                    <a href="/pages/noticia.php" class="news-image">
                        <img src="//indyargentina.com/cdn/shop/articles/vapeando-seguro-desmitificando-los-cigarrillos-electronicos-564045.webp?v=1721478707" alt="Vapeando Seguro: Desmitificando los Cigarrillos Electrónicos" />
                    </a>
                    <div class="news-meta">
                        <span class="news-date"><time datetime="2024-06-25">2024-06-25</time></span>
                        <h3 class="news-title">
                            <a href="/pages/noticia.php">Vapeando Seguro: Desmitificando los Cigarrillos Electrónicos</a>
                        </h3>
                        <p class="news-excerpt">Una de las mentiras más comunes sobre el vapeo es que te aumenta la adicción a fumar cigarrillos tradicionales.</p>
                        <a href="/pages/noticia.php" class="btn1 btn--secondary btn--small">Leer más</a>
                    </div>
                </div>
        
                <div class="news-item">
                    <a href="/pages/noticia.php" class="news-image">
                        <img src="//indyargentina.com/cdn/shop/articles/por-que-mi-vape-escupe-741562.webp?v=1724162959" alt="Por qué mi Vape escupe" />
                    </a>
                    <div class="news-meta">
                        <span class="news-date"><time datetime="2024-08-19">2024-08-19</time></span>
                        <h3 class="news-title">
                            <a href="/pages/noticia.php">Por qué mi Vape escupe</a>
                        </h3>
                        <p class="news-excerpt">Si tu Vape te juega una mala pasada y te plantea un momento incómodo cuando, en lugar de un suave...</p>
                        <a href="/pages/noticia.php" class="btn1 btn--secondary btn--small">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="scripts/carousel.js"></script>
    <script src="scripts/animations.js"></script>
    <script src="scripts/popup.js"></script>
    <script src="scripts/news.js"></script>
    <script src="scripts/burguerAnimation.js"></script>
</body>
</html>
