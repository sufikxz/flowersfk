function addToCart(productName) {
  // Добавление товара в корзину
  console.log("Товар " + productName + " добавлен в корзину");
}

function applyFilter() {
  var priceRange = document.getElementById("priceRange");
  var minPrice = priceRange.min;
  var maxPrice = priceRange.max;
  var selectedMinPrice = priceRange.value;

  // Фильтрация товаров по цене
  var products = document.getElementsByClassName("product");
  for (var i = 0; i < products.length; i++) {
    var product = products[i];
    var price = product.getElementsByClassName("price")[0];
    var productPrice = parseInt(price.innerText);

    if (productPrice >= selectedMinPrice && productPrice <= maxPrice) {
      product.style.display = "block";
    } else {
      product.style.display = "none";
    }
  }
}