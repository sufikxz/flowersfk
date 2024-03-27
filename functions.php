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
function getProducts($gender) {
    global $conn;
    $sql = "SELECT * FROM product WHERE gender = '$gender'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $products = array();
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        return $products;
    } else {
        return false;
    }
}
// Функция получения информации о конкретном товаре по его ID
function getProductById($id) {
    global $conn;
    $sql = "SELECT * FROM product WHERE id = '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Корзина</title>
  <meta charset="UTF-8">
</head>
<body>
<?php 
header('Content-Type: text/html; charset=utf-8');
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
    // Получение информации о товаре из базы данных
    $product = getProductById($productId);
    if ($product) {
        echo '<p>Товар "' . $product['name'] . '" успешно добавлен в корзину.</p>';
    } else {
        echo '<p>Ошибка при добавлении товара в корзину.</p>';
    }
    foreach ($_SESSION['cart'] as $productId => $quantity) {
        $product = getProductById($productId);

        if ($product) {
            echo '<div>';
            echo '<h3>' . $product['name'] . '</h3>';
            echo '<p>Количество: ' . $quantity . '</p>';
            echo '</div>';
        }
    }
} 
?>
</body>
</html>