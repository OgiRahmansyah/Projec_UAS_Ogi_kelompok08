<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css" rel="stylesheet" />
    
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

    <div class="slider">
        <div><center>
            <img src="https://coconuts.co/wp-content/uploads/2016/11/ikan_mas.jpg" width="450" height="250">
            </center>
        </div>
        <div><center>
            <img src="https://gdmagri.com/wp-content/uploads/2020/06/ikan-nila-1024x600.jpg" width="450" height="250">
            </center>
        </div>
        <div><center>
            <img src="https://kicuit.com/wp-content/uploads/2019/07/Tips-Budidaya-Ikan-Lele-di-Daerah-Dingin.jpg" width="450" height="250">
            </center>
        </div>
    </div>
    <div class="box_cari">
      <div class="box_cari">
        <form role="search">
          <input type="search" placeholder="Search" aria-label="Search">
          <button type="submit">Cari</button>
        </form>
      </div>
    </div>

    <div class="conten">
      <div class="conten_produk">
        <div class="product">
          <img src="https://tse1.mm.bing.net/th?id=OIP.o2FrCQErx8OUFdW77FPtmAHaEi&pid=Api&P=0&h=180" alt="Produk 1">
          <div class="name">Produk 1</div>
          <div class="price">$10</div>
          <p>Deskripsi produk 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="product">
          <img src="https://tse1.mm.bing.net/th?id=OIP.o2FrCQErx8OUFdW77FPtmAHaEi&pid=Api&P=0&h=180" alt="Produk 1">
          <div class="name">Produk 1</div>
          <div class="price">$10</div>
          <p>Deskripsi produk 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="product">
          <img src="https://tse1.mm.bing.net/th?id=OIP.o2FrCQErx8OUFdW77FPtmAHaEi&pid=Api&P=0&h=180" alt="Produk 1">
          <div class="name">Produk 1</div>
          <div class="price">$10</div>
          <p>Deskripsi produk 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="product">
          <img src="https://tse1.mm.bing.net/th?id=OIP.o2FrCQErx8OUFdW77FPtmAHaEi&pid=Api&P=0&h=180" alt="Produk 1">
          <div class="name">Produk 1</div>
          <div class="price">$10</div>
          <p>Deskripsi produk 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="conten_produk">
        <div class="product">
          <img src="https://tse1.mm.bing.net/th?id=OIP.o2FrCQErx8OUFdW77FPtmAHaEi&pid=Api&P=0&h=180" alt="Produk 1">
          <div class="name">Produk 1</div>
          <div class="price">$10</div>
          <p>Deskripsi produk 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="product">
          <img src="https://tse1.mm.bing.net/th?id=OIP.o2FrCQErx8OUFdW77FPtmAHaEi&pid=Api&P=0&h=180" alt="Produk 1">
          <div class="name">Produk 1</div>
          <div class="price">$10</div>
          <p>Deskripsi produk 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="product">
          <img src="https://tse1.mm.bing.net/th?id=OIP.o2FrCQErx8OUFdW77FPtmAHaEi&pid=Api&P=0&h=180" alt="Produk 1">
          <div class="name">Produk 1</div>
          <div class="price">$10</div>
          <p>Deskripsi produk 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="product">
          <img src="https://tse1.mm.bing.net/th?id=OIP.o2FrCQErx8OUFdW77FPtmAHaEi&pid=Api&P=0&h=180" alt="Produk 1">
          <div class="name">Produk 1</div>
          <div class="price">$10</div>
          <p>Deskripsi produk 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
</div>
<script src="jquery-3.7.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
<script>
    $(document).ready(function(){
        $('.slider').bxSlider({
            auto:true,
        }) 
    })
    </script>
</body>
</html>