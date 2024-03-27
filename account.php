<?php
// Подключение к базе данных
$servername = "localhost"; 
$username = "sfk";  // Имя пользователя базы данных
$password = "753159";  // Пароль базы данных
$dbname = "buqet";  // Имя базы данных
$conn = new mysqli($servername, $username, $password, $dbname);
// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}
session_start();
$errorMessage = '';
// Обработка формы авторизации
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Проверка совпадения логина и пароля
    if($username == 'admin' && $password == '123') {
        // Установка сессии для авторизованного пользователя
        $_SESSION['username'] = $username;
        // Редирект на личный кабинет
        header("Location: index.php");
        exit;
    } else {
        $errorMessage = "Неправильное имя пользователя или пароль.";
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Авторизация</title>
  <link rel="stylesheet" type="text/css" href="css/styleaccount.css">
</head>
<body style="background-image: url('img/banner.jpeg'); background-size: cover; background-repeat: no-repeat;">
<header>
  <div class="logo">
    <a href="index.php"><img src="img/logo.png"></a>
  </div>
</header>
<div class="container">
    <h2>Авторизация</h2>
    <?php if(isset($errorMessage)): ?>
        <p class="error-message"><?php echo $errorMessage; ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Имя пользователя" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <input type="submit" name="login" value="Войти">
    </form>
</div>
<footer>
  <p>© 2023 SFKFlowers</p>
  <div class="social-icons">
    <a href="https://vk.com/" target="_blank">
      <img src="img/vk.png" alt="VK">
    </a>
    <a href="https://web.telegram.org/a/" target="_blank">
      <img src="img/tg.png" alt="Telegram">
    </a>
    <a href="https://www.instagram.com/" target="_blank">
      <img src="img/inst.png" alt="Instagram">
    </a>
  </div>
</footer>
</body>
</html>