<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Оформление заказа</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/styleorder.css">
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
  <h1>Оформление заказа</h1>
  <form action="process_order.php" method="post" id="order-form">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required placeholder="Иванов Иван Иванович">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required placeholder="ivanov.ivan@mail.ru">
    <label for="address">Адрес доставки:</label>
    <input type="text" id="address" name="address" required placeholder="г. Москва, ул. Мира, д. 2, кв. 30">
    <label for="phone">Номер телефона:</label>
    <input type="tel" id="phone" name="phone" required placeholder="+ 7 (950) 750-99-00">
    <input type="submit" value="Оформить заказ">
  </form>
  <div id="notification" class="notification"></div>
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