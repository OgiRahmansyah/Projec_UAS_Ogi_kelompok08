<!DOCTYPE html>
<html>
<head>
  <title>Checkout Produk</title>
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
          <a class="nav-link" href="../login/index.html">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../login/index.html">Sing In</a>
        </li>
	    </ul>
    </div>
  </header>
  <div class="container">
    <h1>Checkout Produk</h1>
    <div class="produk">
      <img src="https://coconuts.co/wp-content/uploads/2016/11/ikan_mas.jpg" alt="Produk 2">
      <div class="item-details">
        <h3>Produk</h3>
        <p>Harga: Rp.15000</p>
        <p>Jumlah: 1</p>
      </div>
    </div>

    <form>
      <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="address">Alamat Pengiriman</label>
        <textarea id="address" name="address" required></textarea>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Nomor Telepon</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label for="card">Nomor Kartu Kredit</label>
        <input type="text" id="card" name="card" required>
      </div>
      <button type="submit">Beli</button>
    </form>
  </div>
</div>
</body>
</html>
