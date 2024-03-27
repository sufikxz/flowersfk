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
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>KidsWearStore</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/styleboys.css">
</head>
<body>
<header>
  <div class="logo">
    <a href="index.php"><img src="img/logo.png"></a>
  </div>
<nav class="menu">
  <ul>
  <li><a href="boys.php">Букеты</a></li>
    <li><a href="girls.php">Цветы в корзине/коробке</a></li>
    <li><a href="accessories.php">Подарки</a></li>
    <li><a href="about.php">О нас</a></li>
    <li><a href="cart.php">Корзина</a></li>
    <li><a href="account.php">Авторизация</a></li>
  </ul>
</nav>
</header>
<main> 
  <div class="products-container"> <!-- Добавлен контейнер для товаров -->
    <?php 
    require_once 'functions.php'; 
    // Получение всех товаров из базы данных 
    $products = getProducts('м'); 
    if (is_array($products) && !empty($products)) { 
        foreach ($products as $product) { 
            echo '<div class="product">'; 
            echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">'; 
            echo '<h2>' . $product['name'] . '</h2>'; 
            echo '<p>' . $product['description'] . '</p>'; 
            echo '<p>Цена: ' . $product['price'] . '₽</p>'; 
            echo '<form action="cart.php" method="post">'; 
            echo '<input type="hidden" name="product_id" value="' . $product['id'] . '">'; 
            echo '<input type="submit" class="button" value="Добавить в корзину">'; 
            echo '</form>'; 
            echo '</div>'; 
        } 
    } else { 
        echo '<p>Товары отсутствуют.</p>'; 
    } 
    ?> 
  </div> 
</main>
  <button class="scroll-btn" onclick="scrollToTop()">&#8679;</button>
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
  <script src="js/script.js"></script>
</body>
</html>