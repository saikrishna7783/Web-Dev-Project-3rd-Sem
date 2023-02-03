<?php
session_start();
if (!isset($_SESSION["email_id"])) {
  header("location:index.php?error=notloggedin");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cart</title>
  <link rel="stylesheet" href="css/section.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/utils.css" />
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
</head>

<body>
  <header>
    <a href="#" class="logo_container">
      <img src="img/logo.jpg">
    </a>
    <ul class="navigation">
      <li><a href="index.php">HOME</a></li>
      <li><a href="about.php">ABOUT</a></li>
      <li><a href="contact.php">CONTACT</a></li>
      <li><a href="login.php">LOGIN</a></li>
      <li><a class="active" href="cart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a></li>
    </ul>
  </header>

  <div class="shopping-cart">
    <h1>Shopping Cart</h1>
    <table id="cart">
      <tr>
        <th>Product Image</th>
        <th>Product</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </table>
    <p id="total"></p>
    <a href="checkout.php"> <button class="checkout-button">Checkout</button></a>
  </div>



  <footer>
    <p>Copyright &copy; BMSTechKart.com </p>
  </footer>

  <style>
    .shopping-cart {
      width: 80%;
      margin: 0 auto;
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th,
    td {
      padding: 10px;
      border: 1px solid #ddd;
    }

    th {
      background-color: #ddd;
      text-align: left;
    }

    td img {
      width: 100px;
      height: 100px;
    }

    .checkout-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #000;
      color: #fff;
      border: none;
      border-radius: 5px;
      margin-top: 20px;
    }

    .checkout-button:hover {
      cursor: pointer;
      background-color: #333;
    }
  </style>


  <script>
    const cartTable = document.getElementById('cart');
    const total = document.getElementById('total');

    window.addEventListener('load', function() {
      updateCart();
    });

    function updateCart() {
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      let tableRows = '';
      let cartTotal = 0;

      cart.forEach(function(product, index) {
        tableRows += `
      <tr>
        <td>
          <img  src="${product.image}" alt="${product.name}">
        </td>
        <td>${product.name}</td>
        <td>INR ${product.price}</td>
        <td>
          <button onclick="removeFromCart(${index})">Remove</button>
        </td>
      </tr>
    `;
        cartTotal += product.price;
      });

      cartTable.innerHTML = tableRows;
      total.textContent = `Total: INR ${cartTotal}`;
    }

    function removeFromCart(index) {
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      cart.splice(index, 1);
      localStorage.setItem('cart', JSON.stringify(cart));
      updateCart();
    }
  </script>

</body>

</html>