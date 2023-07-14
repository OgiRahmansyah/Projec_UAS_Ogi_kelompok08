<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="halaman">
  <header>
    <div class="logo">
			<h1><u>Sagala Lauk</u></h1>
			<p>Nu Aya Aya Nu Euweh Aya</p>
		</div>   
      <div class="menu">
        <ul>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../dashboard/index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../chekout/index.php">Pesanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../keranjang/index.php">Keranjang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../notifikasi/index.php">Notifikasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../login/index.php">Log In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../register/index.php">Daftar</a>
          </li>
	      </ul>
      </div>
  </header>

  <div class="cart-container">
    <h2>Keranjang Belanja</h2>
    <div class="cart-items">
    <div class="cart-item">
        <img src="https://coconuts.co/wp-content/uploads/2016/11/ikan_mas.jpg" alt="Produk 1">
        <div class="item-details">
          <h3>Produk 1</h3>
          <p>Harga: Rp.10000</p>
          <p>Jumlah: 2</p>
          <button class="remove-button">Hapus</button>
        </div>
      </div>
    </div>
    <div class="cart-item">
      <img src="https://coconuts.co/wp-content/uploads/2016/11/ikan_mas.jpg" alt="Produk 2">
      <div class="item-details">
        <h3>Produk 2</h3>
        <p>Harga: Rp.15000</p>
        <p>Jumlah: 1</p>
        <button class="remove-button">Hapus</button>
      </div>
    </div>
  
    <div class="cart-summary">
      <p>Total: Rp.35000</p>
      <a href="../chekout/index.php">
      <button class="checkout-button">Checkout</button>
      </a>
    </div>
  </div>
</div>
</body>
</html>