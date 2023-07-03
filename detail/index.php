<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notifikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sing In</a>
                    </li>
	            </ul>
            </div>
        </header>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <img src="https://coconuts.co/wp-content/uploads/2016/11/ikan_mas.jpg" alt="Gambar Produk" class="gambar-produk">
                    <div class="status-stok">Stok: Tersedia</div>
                    <div>
                        <button class="button">Beli Sekarang</button>
                        <button class="button">Chat</button>
                        <button class="button">+ Keranjang</button>
                    </div>
                </div>

                <div class="col">
                    <div class="deskripsi">
                        <h1 class="judul-produk">Nama Produk</h1>
                        <p class="harga-produk">Harga: Rp 100.000</p>
                    <div class="jumlah-produk">
                        <label for="quantity">Jumlah:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1">
                    </div>
                        <p class="deskripsi-produk">Deskripsi Produk Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ipsa officia repellendus explicabo rem ab a, qui illo deleniti minus aliquid velit inventore, voluptatem adipisci. Sequi, dicta. Doloremque, itaque illo.</p>
                    <div class="rating">
                        <p class="rating-text">Rating:</p>
                        <div class="stars">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col">
                    <div class="ulasan">
                        <h2>Ulasan</h2>
                    <div class="ulasan-item">
                        <p class="nama-pengguna">Ogi</p>
                        <p class="rating-ulasan">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                        <p class="isi-ulasan">Produk sangat bagus! Saya sangat puas dengan pembelian ini.</p>
                    </div>
                    <div class="ulasan-item">
                        <p class="nama-pengguna">Ahmad</p>
                        <p class="rating-ulasan">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                        <p class="isi-ulasan">Produk ini luar biasa! Sangat direkomendasikan!</p>
                    </div>
                    </div>
                </div>
            </div>

            <div class="lainnya"><h3>Produk Lainnya</h3></div>

            <div class="conten">
                <div class="conten_produk">
                <div class="product">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.o2FrCQErx8OUFdW77FPtmAHaEi&pid=Api&P=0&h=180" alt="Produk 1">
                <div class="name">Produk 1</div>
                <div class="price">Rp.10.000</div>
                    <p>Deskripsi produk 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                    <div class="product">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.o2FrCQErx8OUFdW77FPtmAHaEi&pid=Api&P=0&h=180" alt="Produk 1">
                <div class="name">Produk 1</div>
                <div class="price">Rp.10.000</div>
                    <p>Deskripsi produk 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="product">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.o2FrCQErx8OUFdW77FPtmAHaEi&pid=Api&P=0&h=180" alt="Produk 1">
                <div class="name">Produk 1</div>
                <div class="price">Rp.10.000</div>
                    <p>Deskripsi produk 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="product">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.o2FrCQErx8OUFdW77FPtmAHaEi&pid=Api&P=0&h=180" alt="Produk 1">
                <div class="name">Produk 1</div>
                <div class="price">Rp.10.000</div>
                    <p>Deskripsi produk 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>