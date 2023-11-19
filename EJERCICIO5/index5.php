<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 Guerra Erick</title>
    <link rel="stylesheet" href="styles5.css">
</head>
<body>
    <div class="gallery">
        <?php
            $imageLinks = [
                "https://cdn.shopify.com/s/files/1/0608/7819/2888/files/ducati-panigale-2023.jpg?v=1674124748",
                "https://www.loja.gob.ec/files/noticias/2017/03/tren.jpg",
                "https://cnnespanol.cnn.com/wp-content/uploads/2023/10/231019093315-01-three-year-cruise-more-obstacles.jpg?quality=100&strip=info",
                "https://www.kia.com/content/dam/kwcms/gt/en/images/discover-kia/voice-search/parts-80-1.jpg"
            ];

            foreach ($imageLinks as $link) {
                echo "<img src='{$link}' alt='Imagen'>";
            }
        ?>
    </div>
</body>
</html>
