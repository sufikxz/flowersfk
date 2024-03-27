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
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
<div class="banner">
  <img src="img/banner.jpeg" alt="Фотография баннера">
  <div class="content">
    <h2>Букеты цветов</h2>
    <p>Выберите один из готовых букетов или закажите уникальный, 
      который<br> будет соответствовать всем вашим пожеланиям</p>
    <a href="boys.php">Перейти к покупкам</a>
  </div>
</div>
<div class="slider" style="text-align: center;">
  <h2>Конкурс</h2>
  <p>Проводим конкурс среди наших покупателей за лучшее селфи с нашим букетом и Вы<br> можете получите возможность забрать привлекательные призы. Для этого требуется<br> загрузить фото с нашим букетом по Кнопке ниже.</p>
  <div class="file-upload">
  <label for="photo">Выберите файл</label>
  <input type="file" name="photo" id="photo">
</div>
</div>
<div class="popular-products"> 
<h2>Следите за нами <a href="https://vk.com">VK</a></h2>
<p style="font-size: 24px;">Во вконтакте мы делимся процессом своей работы, фотографиями готовых<br>букетов и нашими счастливыми клиентами.</p> 
<div class="gallery">
    <img src="img/big.jpg" class="big-photo">
    <img src="img/big2.jpg" class="big-photo">
    <img src="img/big3.jpg" class="big-photo">
    <img src="img/big4.jpg" class="big-photo">
  </div>
</div>
</div>
<section class="our-advantages">
  <h1>Наши преимущества</h1>
  <p style="font-size: 24px;">Каждый день мы создаем и экспериментируем, чтобы<br> сделать наших клиентов счастливыми</p> 
  <div class="advantage">
  <div class="circle">1</div> 
    <h2>Всегда свежие цветы</h2>
    <p>Наши букеты будут вас радовать<br> как минимум полторы недели</p>
  </div>
  <div class="advantage">
  <div class="circle">2</div> 
    <h2>Быстрая доставка</h2>
    <p>Мы доставляем букеты в течение<br> 3 часов после заказа</p>
  </div>
  <div class="advantage">
  <div class="circle">3</div> 
    <h2>Талантливые флористы</h2>
    <p>Все наши флористы имеют<br> многолетний опыт работы</p>
  </div>
</section>
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