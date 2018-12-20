<?php
session_start();

echo "<pre>";
print_r($_SESSION['keranjang']);
echo "</pre>";

new mysqli("localhost","root","kutukupret123")
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Keranjang Belanja</title>
  </head>
  <body>
    <nav>
      <div class="container">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="keranjang.php">Keranjang</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="checkout.php">Checkout</a></li>
        </ul>
      </div>
    </nav>

    <section>
      <div class="container">
        <h1>Keranjang Belanja</h1>
        <hr>
        <table border="1">
          <thead>
            <tr>
              <th>No</th>
              <th>Produk</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Subharga</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
            <tr>
              <td>x</td>
              <td>x</td>
              <td>x</td>
              <td>x</td>
              <td>x</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </body>
</html>
