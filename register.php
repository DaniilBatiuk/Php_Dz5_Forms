<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($username) && !empty($email) && !empty($password)) {
            $data = $username . ':' . $email . ':' . $password . "\n";

            file_put_contents('users.txt', $data, FILE_APPEND);

            echo 'Регистрация успешно завершена.';
        } else {
            echo 'Пожалуйста, заполните все поля.';
        }
    }
    ?>
    <div style="display: flex; justify-content:center; align-items:center; height:100vh; flex-direction:column; font-size:30px;">
        <h1>Регистрация</h1>
        <form method="POST" action="" style="width: 300px; display: flex; flex-direction:column;">
            <label for="username">Имя пользователя:</label>
            <input type="text" name="username" id="username" require style="height: 30px; font-size:30px;">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required style="height: 30px; font-size:30px;">
            <br>
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password" required style="height: 30px; font-size:30px;">
            <br>
            <input type="submit" value="Зарегистрироваться" style="height: 50px; font-size:30px;">
        </form>
        <a href="index.php">Home</a>
    </div>
</body>

</html>