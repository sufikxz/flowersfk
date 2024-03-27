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
// Функция получения информации о товаре по его ID
function getProductById($productId) {
    global $conn;
    $sql = "SELECT * FROM product WHERE id = '$productId'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}
// Функция для обновления количества товара в корзине
function updateCartItemQuantity($productId, $quantity) {
    if ($quantity < 1) {
        unset($_SESSION['cart'][$productId]);
    } else {
        $_SESSION['cart'][$productId] = $quantity;
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Корзина</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/stylecart.css">
</head>
<header>
<div class="logo">
   <a href="index.php"><img class="header-logo" src="img/logo.png"></a>
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
<body>
    <div class="container">
        <h1>Корзина</h1>
        <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }   
    if (!isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId] = 1;
    } else {
        $_SESSION['cart'][$productId]++;
    }
    // Убедиться, что количество не отрицательное
    if ($_SESSION['cart'][$productId] < 1) {
        unset($_SESSION['cart'][$productId]);
    }

    $product = getProductById($productId);
    if ($product) {
        echo '<p>Товар "' . $product['name'] . '" успешно добавлен в корзину.</p>';
    } else {
        echo '<p>Ошибка при добавлении товара в корзину.</p>';
    }
}

    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo '<h2 class="cart-heading">Содержимое корзины:</h2>';
        $totalPrice = 0; // Переменная для хранения общей суммы товаров
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['minus'])) {
          $productId = $_POST['minus'];
          if (isset($_SESSION['cart'][$productId])) {
              $_SESSION['cart'][$productId]--;
              updateCartItemQuantity($productId, $_SESSION['cart'][$productId]);
          }
      }
      
      if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['plus'])) {
          $productId = $_POST['plus'];
          if (isset($_SESSION['cart'][$productId])) {
              $_SESSION['cart'][$productId]++;
              updateCartItemQuantity($productId, $_SESSION['cart'][$productId]);
          }
      }
        foreach ($_SESSION['cart'] as $productId => $quantity) {
          if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove'])) {
            $productId = $_POST['remove'];
            if (isset($_SESSION['cart'][$productId])) {
                unset($_SESSION['cart'][$productId]);
            }
        }
            $product = getProductById($productId);
            if ($product) {
                // Рассчитываем сумму для текущего товара
                $itemPrice = $product['price'] * $quantity;
                $totalPrice += $itemPrice;
                echo '<div class="cart-product">';
                echo '<div class="product-image">';
                echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                echo '</div>';
                echo '<div class="product-info">';
                echo '<h3>' . $product['name'] . '</h3>';
                echo '<p class="product-price"> Цена: ' . $product['price'] . ' ₽</p>';
                echo '<div class="quantity">';
                echo '<form method="post">';
                echo '<button type="submit" name="minus" value="' . $productId . '">-</button>';
                echo '<input type="text" name="quantity" value="' . $_SESSION['cart'][$productId] . '" readonly>';
                echo '<button type="submit" name="plus" value="' . $productId . '">+</button>';
                echo '<form method="post">';
                echo '</form>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        }
        echo '<p class="total-price">Общая сумма: ' . $totalPrice . ' ₽</p>'; // Выводим общую сумму
    } else {
        echo '<p>Ваша корзина пуста, товаров не обнаружено. Добавьте товары в корзину!</p>';
    }
    // Обновление количества товара при нажатии на кнопки "-" и "+"
    if (isset($_POST['minus']) || isset($_POST['plus'])) {
        if (isset($_POST['minus'])) {
            $productId = $_POST['minus'];
            $quantity = isset($_SESSION['cart'][$productId]) ? $_SESSION['cart'][$productId] - 1 : 0;
        } else {
            $productId = $_POST['plus'];
            $quantity = $_SESSION['cart'][$productId] + 1;
        }
        
        // Обновляем количество товара в корзине
        $_SESSION['cart'][$productId] = $quantity;
    }
?>
        <a href="order.php" class="order-button">Оформить заказ</a>
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