<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }
        .gallery img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Галерея</h1>
    <div class="gallery">
        <?
        $imageFiles = glob('uploads/*.jpg');
        foreach ($imageFiles as $imageFile) {
            echo '<img src="' . $imageFile . '">';
        }
        ?>
    </div>
    <a href="index.php">Home</a>
</body>
</html>