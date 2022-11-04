<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Toko Ini</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--[if lte IE 6]><link rel="stylesheet" href="C:\Users\ACER\OneDrive\Documents\BEBAN HIDUP\css\ie6.css" type="text/css" media="all" /><![endif]-->
<script src="C:\Users\ACER\OneDrive\Documents\POSTTEST2 WEB\js\jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="C:\Users\ACER\OneDrive\Documents\POSTTEST2 WEB\js\jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="C:\Users\ACER\OneDrive\Documents\POSTTEST2 WEB\js\jquery-func.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
</head>
<body>
<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
    <h1 id="logo"><a href="#">Kategori</a></h1>
    <!-- Navigation -->
    <div id="navigation">
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Bantuan</a></li>
        <li><a href="crud/index.php">Akun Saya</a></li>
        <li><a href="#">Toko Ini</a></li>
        <li><a href="#">Contact Person</a></li>
        <li><a href=""><form action="logout.php" method="post" class="tbl"><button type="submit" name="logout"
                                class="lgt">logout</button>
                        </form></a></li>
        <li><a href="#"><i class="bi-brightness-high-fill" id="toggleDark"></i></a></li>
      </ul>
    </div>
    <!-- End Navigation -->
  </div>
  <!-- End Header -->
  <!-- Main -->
  <div id="main">
    <div class="cl">&nbsp;</div>
    <!-- Content -->
    <div id="content">
      <!-- Content Slider -->
      <div id="slider" class="box">
        <div id="slider-holder">
          <ul>
            <li><a href="#"><img src="image/angel shop.jpeg" alt="image" class="newspaper" style="width: 750px; height: 250px;" /></a></li>
          </ul>
        </div>
      </div>
      <!-- End Content Slider -->
      <!-- Products -->
      <div class="products" onclick="a()">
        <div class="cl">&nbsp;</div>
        <ul>
          <li> <a href="#"><img src="image/jaket.jpeg" alt="image" style="width: 200px; height: 200px;" class="newspaper"/></a>
            <div class="product-info">
              <h3>ANGEL'S VOITTON</h3>
              <div class="product-desc">
                <h4>UNISEX’S</h4>
                <p>ANGEL'S VOITTON X CHANEL<br />
                  Jacket SpringTime 2022</p>
                <strong class="harga">Rp.1.200.000</strong> </div>
            </div>
          </li>
          <li> <a href="#"><img src="image/jersey.jpeg" alt="image" style="width: 150px; height: 200px;" class="newspaper" /></a>
            <div class="product-info">
              <h3>ANGEL'S VOITTON</h3>
              <div class="product-desc">
                <h4>UNISEX’S</h4>
                <p>ANGEL'S VOITTON X JAEMIN'S STYLE<br />
                  Spring Summer Sport Jersey 2022</p>
                <strong class="harga">Rp.28.714.800</strong> </div>
            </div>
          </li>
          <li class="last"> <a href="#"><img src="image/kardigan.jpeg" alt="image" style="width: 150px; height: 200px;" class="newspaper"/></a>
            <div class="product-info">
              <h3>ANGEL'S VOITTON</h3>
              <div class="product-desc">
                <h4>UNISEX’S</h4>
                <p>ANGEL'S VOITTON X CELINE<br />
                  Star Loose Cardigan</p>
                <strong class="harga">Rp.35.600.000</strong> </div>
            </div>
          </li>
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
      <!-- End Products -->
    </div>
    <!-- End Content -->
    <!-- Sidebar -->
    <div id="sidebar">
      <!-- Search -->
      <div class="box search" id="test4">
        <h2>Pencarian <span></span></h2>
        <div class="box-content" id="test5">
          <form action="#" method="post">
            <label>Pencarian</label>
            <input type="text" class="field" />
            <label>Kategori</label>
            <select class="field">
              <option value="">-- Pilih Kategori --</option>
            </select>
            <div class="inline-field">
              <label>Harga</label>
              <select class="field small-field">
                <option value="">Rp.700.000</option>
              </select>
              <label>Ke:</label>
              <select class="field small-field">
                <option value="">Rp.8.000.000</option>
              </select>
            </div>
            <input type="submit" class="search-submit" value="Search" />
            <p> <a href="#" class="bul">Pencarian</a><br />
              <a href="#" class="bul">Kontak Kostumer</a> </p>
          </form>
        </div>
      </div>
      <!-- End Search -->
      <!-- Categories -->
      <div class="box categories" id="test1">
        <h2>Kategori <span></span></h2>
        <div class="box-content">
          <ul>
            <li><a href="#">Kategori 1</a></li>
            <li><a href="#">Kategori 2</a></li>
            <li><a href="#">Kategori 3</a></li>
            <li><a href="#">Kategori 4</a></li>
            <li><a href="#">Kategori 5</a></li>
            <li><a href="#">Kategori 6</a></li>
            <li><a href="#">Kategori 7</a></li>
            <li><a href="#">Kategori 8</a></li>
            <li><a href="#">Kategori 9</a></li>
            <li><a href="#">Kategori 10</a></li>
            <li><a href="#">Kategori 11</a></li>
            <li><a href="#">Kategori 12</a></li>
            <li class="last"><a href="#">Kategori 13</a></li>
          </ul>
        </div>
      </div>
      <!-- End Categories -->
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>
  </div>
  
<!-- About me -->
<section id="aboutme">
  <div class = "image" id="test2">
     <img src="image/my self.jpg" alt="image" style="width: 230px; height: 300px;"  /></a>
     <img src="image/icung.jpeg" alt="image" style="width: 230px; height: 300px;" /></a>
    </div>
    
  

  <div class = "content" id="test3">
      <h2 onclick="b()">Anyonghaseo Gais!!</h2>
      <span><!-- line here --></span>
      <p>Nama: Angelita Catrin</p>
      <p>NIM: 2109106145</p>
      <p>Program Studi: Informatika</p>
      <p>Hobby: Menghaluin Na Jaemin dan Park Jisung</p>
      <p>Motto: Menjadi wife dari Na Jaemin dan Park Jisung</p>
      <p>"Halo saya owner dari ANGEL'S VOITTON STORE, silahkan di lihat-lihat produk terbaru kami dan jangan salfok dengan modelnya ya!!"</p>
      <p>OWNER: Angelita Na</p>
      <ul class = "icons">
          <li><a href="https://www.instagram.com/na_angeljalung/"><i class="fa-brands fa-instagram"></i></a>
          </li>
          <li><a href="https://github.com/angelita1005/Angelita"><i class="fa-brands fa-github"></i></a>
          </li>
          <li><a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
          </li>
      </ul>
  </div>
</section>

  <!-- End Side Full -->
  <!-- Footer -->
  <div id="footer">
    <p class="left"> <a href="#">Home</a> <span>|</span> <a href="#">Bantuan</a> <span>|</span> <a href="#">Akun Saya</a> <span>|</span> <a href="#">Toko Ini</a> <span>|</span> <a href="#">Contact Person</a> </p>
    <p class="right"> &copy; 2010 Shop Around. Design by <a href="https://www.instagram.com/na.jaemin0813/">ANGEL'S VOITTON X JAEMIN'S STYLE</a> </p>
    
  </div>
  <!-- End Footer -->
</div>
<script src="script.js"></script>
<!-- End Shell -->
</body>
</html>