<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Оформление заказа</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/styleprocess_order.css">
</head>
<body>
<header>
<div class="logo">
   <a href="index.php"><img class="header-logo" src="img/logo.png"></a>
</div>
<nav class="menu">
  <ul>
    <li><a href="boys.php">Мальчикам</a></li>
    <li><a href="girls.php">Девочкам</a></li>
    <li><a href="accessories.php">Аксессуары</a></li>
    <li><a href="about.php">О нас</a></li>
    <li><a href="contact.php">Связь с нами</a></li>
    <li class="cart-item">
      <a href="cart.php" class="cart-icon">
        <img class="cart-icon-img" src="img/cart.png" alt="Cart">
      </a>
    </li>
  <li class="account-item">
    <a href="account.php" class="account-icon">
      <img class="account-icon-img" src="img/user.png" alt="User">
    </a>
  </li>
  </ul>
</nav>
</header>
  <div class="container">
    <img src="img/tick.png" alt="Success Image">
    <h1>Спасибо!</h1>
    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name'], $_POST['email'], $_POST['address'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        // Очищаем корзину
        unset($_SESSION['cart']);
        echo '<p>Ваш заказ успешно оформлен. Мы свяжемся с вами в ближайшее время!</p>';
    } else {
        echo '<p>Ошибка при оформлении заказа.</p>';
    }
    ?>
  </div>
<footer>
  <div class="footer-logo">
    <a href="index.php"><img class="footer-logo-img" src="img/logo.png"></a>
  </div>
  <div class="social-icons">
    <a href="https://vk.com/" target="_blank">
      <img class="social-icon-img" src="img/vk.png" alt="VK">
    </a>
    <a href="https://web.telegram.org/a/" target="_blank">
      <img class="social-icon-img" src="img/tg.png" alt="Telegram">
    </a>
    <a href="https://www.instagram.com/" target="_blank">
      <img class="social-icon-img" src="img/inst.png" alt="Instagram">
    </a>
  </div>
</footer>
</body>
</html>
</body>
</html>