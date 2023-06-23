<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
        $image = $_FILES['image'];

        $allowedTypes = ['image/jpeg', 'image/png'];
        if (in_array($image['type'], $allowedTypes)) {
            $uploadPath = 'uploads/' . $image['name'];

            if (!file_exists($uploadPath)) {
                move_uploaded_file($image['tmp_name'], $uploadPath);

                echo 'Изображение успешно загружено.';
            } else {
                echo 'Файл уже существует.';
            }
        } else {
            echo 'Неверный формат файла. Разрешены только JPEG и PNG.';
        }
    }
    ?>
    <div style="display: flex; justify-content:center; align-items:center; height:100vh; flex-direction:column; font-size:30px;">
        <h1>Загрузка изображений</h1>
        <form method="POST" action="" enctype="multipart/form-data" style="width: 500px; display: flex; flex-direction:column;">
            <input type="file" name="image" required style="height: 50px; font-size:30px;">
            <br>
            <input type="submit" value="Загрузить" style="height: 50px; font-size:30px;">
        </form>
        <a href="index.php">Home</a>
    </div>
</body>

</html>