<!DOCTYPE html>
<html>
<head>
  <title>Halaman Admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
	        <h1 id="logo"><u>Sagala Lauk</u></h1>
            <div id="teks"><p id="logo">Nu Aya Aya Nu Euweh Aya</p>
            </div>
	    </div>
        </div>
        <div class="menu">
          <ul>
            <li class="nav-item">
              <a class="nav-link" href="../login/index.php">Log out</a>
            </li>
          </ul>
    </header>
  <div class="container">
    <div class="border-admin">
     <h1>Halaman Admin</h1>
     <h2>Tambah Produk</h2>
    <form>
      <label for="nama">Nama Produk:</label>
      <input type="text" id="nama" name="nama" required>
      
      <label for="harga">Harga:</label>
      <input type="text" id="harga" name="harga" required>
      
      <label for="deskripsi">Deskripsi:</label>
      <textarea id="deskripsi" name="deskripsi" required></textarea>
      
      <label for="foto">Foto Produk:</label>
      <input type="file" id="foto" name="foto" accept="image/*" required>
      
      <button type="submit">Tambah</button>
    </form>
    </div><br>

    <div class="border-produk">
     <h2>Daftar Produk</h2>
     <ul id="daftar-produk">
      <li>
        <div class="produk">
          <div class="foto-produk">
            <img src="https://coconuts.co/wp-content/uploads/2016/11/ikan_mas.jpg" alt="Produk 1">
          </div>
          <div class="detail-produk">
            <h3>Nama Produk 1</h3>
            <p>Harga: Rp. 30000</p>
            <p>Deskripsi: Deskripsi produk 1</p>
            <button class="edit-btn">Edit</button>
            <button class="hapus-btn">Hapus</button>
          </div>
        </div>
      </li>
      <li>
        <div class="produk">
          <div class="foto-produk">
            <img src="https://coconuts.co/wp-content/uploads/2016/11/ikan_mas.jpg" alt="Produk 2">
          </div>
          <div class="detail-produk">
            <h3>Nama Produk 2</h3>
            <p>Harga: Rp. 20000</p>
            <p>Deskripsi: Deskripsi produk 2</p>
            <button class="edit-btn">Edit</button>
            <button class="hapus-btn">Hapus</button>
          </div>
        </div>
      </li>
     </ul>
    </div>
  </div>
</body>
</html>
