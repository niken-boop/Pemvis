<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bookepink</title>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Pacifico&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
  background: linear-gradient(135deg, #fde2f3, #e8f0ff);
  font-family: 'Pacifico', cursive;
  overflow-x: hidden;
  color: #333;
}

.Novel1 {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 240px;
  background: rgba(255,255,255,0.7);
  backdrop-filter: blur(15px);
  border-right: 1px solid rgba(255,255,255,0.4);
  box-shadow: 2px 0 10px rgba(0,0,0,0.05);
  padding: 30px 20px;
}

.Novel1 h4 {
  color: #4a4a8d;
  font-weight: 700;
  margin-bottom: 40px;
}

.Novel1 a {
  display: flex;
  align-items: center;
  gap: 10px;
  color: #555;
  text-decoration: none;
  margin: 18px 0;
  transition: all 0.3s ease;
}

.Novel1 a:hover {
  color: #ff69b4;
  transform: translateX(4px);
}

.main-content {
  margin-left: 260px;
  padding: 40px;
  min-height: 100vh;
}

/* Book section */
.book-card {
  background: rgba(255,255,255,0.8);
  border-radius: 20px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.05);
  padding: 20px;
  transition: 0.3s;
  height: 380px;
}

.book-card:hover {
  transform: translateY(-5px);
}
/*.title_cute{
  font-family: 'pacifico', cursive;
  font-size: 32px;
  color: #c499b7ff;
  text-shadow:1px 1px 2px rgba(0,0,0,0.1);
  letter-spacing: 1px;
}

/* Buttons */
.btn-pink {
  background: #ff69b4;
  border: none;
  color: white;
  border-radius: 25px;
  padding: 10px 25px;
  font-weight: 500;
}

.btn-pink:hover {
  background: #ff85c1;
}

/* Scroll section */
.scroll-section {
  margin-top: 60px;
}
.book-img {
  width: 150px;
  height: auto;
  border-radius: 12px;
  object-fit: cover;
  display: block;
  margin: 0 auto;
}
</style>
</head>
<body>

<!-- Sidebar -->
<div class="Novel1">
  <h4>📚 Bookepink</h4>
  <a href="<?php echo site_url('account'); ?>"><i class="bi bi-person"></i> Account</a>
  <!--<a href="#"><i class="bi bi-bell"></i> Notifications</a>
  <a href="#"><i class="bi bi-bag"></i> My Orders</a>
  <a href="#"><i class="bi bi-heart"></i> Favorites</a>
  <a href="#"><i class="bi bi-gear"></i> Settings</a>-->
  <a href="<?php echo site_url('daftar'); ?>" style="color:red;"><i class="bi bi-box-arrow-right"></i> Logout</a>
</div>

<!-- Main Content -->
<div class="main-content">
  <div class="container">

 <!--  <div class="row mt-4">
      <h2 class="fw-bold text-primary"></h2>
      <p class="text-muted">Anne of Green Gables</p>
      <div class="col-md-4">
        <img src="<?php echo base_url('asset/Anne.jpeg'); ?>" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-8">
        <p>"Anne of Green Gables" adalah sinopsis dari kisah novel klasik oleh Lucy Maud Montgomery tentang seorang anak yatim piatu bernama Anne Shirley yang secara keliru diadopsi oleh kakak beradik Matthew dan Marilla Cuthbert,</p>
          <p>yang sebenarnya menginginkan anak laki-laki untuk membantu pertanian mereka. Novel ini mengikuti petualangan, persahabatan, dan pertumbuhan Anne saat ia beradaptasi dengan kehidupan di Green Gables,</p>
          <p> sebuah peternakan di Desa Avonlea, meskipun memiliki kepribadian yang penuh imajinasi dan bicara. </p>
        <button class="btn btn-pink me-2">Paperbook-Rp98.000</button>
        <button class="btn btn-outline-secondary">E-book-Rp32.000</button>
      </div>
    </div> -->

<div class="scroll-section">
  <h4 class="mt-5">💕Selamat Datang di Bookepink💕</h4>

  <div class="d-flex overflow-auto mt-3" style="gap:20px;">

    <!-- Buku 1 -->
    <a href="<?php echo site_url('detail_buku/detail/1'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/CantikLuka.jpg'); ?>" class="book-img">
        <p class="mt-2 text-center">Cantik Itu Luka</p>
        <p class="mt-2 text-center">Ina Kurniawan</p>
      </div>
    </a>

    <!-- Buku 2 -->
    <a href="<?php echo site_url('detail_buku/detail/2'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/Dallergut.jpg'); ?>" class="book-img">
        <p class="mt-2 text-center">Dallergut: Toko</p>
        <p class="mt-2 text-center">Penjual Mimpi</p>
        <p class="mt-2 text-center">Lee Miye</p>
      </div>
    </a>

    <!-- Buku 3 -->
    <a href="<?php echo site_url('detail_buku/detail/3'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/KacangMerah.jpg'); ?>" class="book-img">
        <p class="mt-2 text-center">Pasta Kacang Merah</p>
        <p class="mt-2 text-center">Durian Sukegawa</p>
      </div>
    </a>

    <!-- Buku 4 -->
    <a href="<?php echo site_url('detail_buku/detail/4'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/Laut.jpg'); ?>" class="book-img">
        <p class="mt-2 text-center">Laut Bercerita</p>
        <p class="mt-2 text-center">Leila S. Chudori</p>
      </div>
    </a>

    <!-- Buku 5 -->
    <a href="<?php echo site_url('detail_buku/detail/5'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/MidLib.jpg'); ?>" class="book-img">
        <p class="mt-2 text-center">The Midnight Library</p>
        <p class="mt-2 text-center">Matt Haig</p>
      </div>
    </a>

  </div>
</div>


<!-- SECTION 2 -->
<div class="scroll-section">
  <div class="d-flex overflow-auto mt-3" style="gap:20px;">

    <!-- Mom -->
    <a href="<?php echo site_url('detail_buku/detail/6'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/mom.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">Please Look After Mom</p>
        <p class="mt-2 text-center">Kyung-sook Shin</p>
      </div>
    </a>

    <!-- Namiya -->
    <a href="<?php echo site_url('detail_buku/detail/7'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/TokoNamiya.jpg'); ?>" class="book-img">
        <p class="mt-2 text-center">Toko Kelontong Namiya</p>
        <p class="mt-2 text-center">Keigo Higashino</p>
      </div>
    </a>

    <!-- Devotion -->
    <a href="<?php echo site_url('detail_buku/detail/8'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/devotion.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">The Devotion of Suspect X</p>
        <p class="mt-2 text-center">Keigo Higashino</p>
      </div>
    </a>

    <!-- Dua Dini Hari -->
    <a href="<?php echo site_url('detail_buku/detail/9'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/DuaDiniHari.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">Dua Dini Hari</p>
        <p class="mt-2 text-center">Chandra Bientang</p>
      </div>
    </a>

    <!-- Good Girl -->
    <a href="<?php echo site_url('detail_buku/detail/10'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/girl.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">A Good Girl's Guide to Murder</p>
        <p class="mt-2 text-center">Holly Jackson</p>
      </div>
    </a>

  </div>
</div>


<!-- SECTION 3 -->
<div class="scroll-section">
  <div class="d-flex overflow-auto mt-3" style="gap:20px;">

    <!-- Kim Ji-young -->
    <a href="<?php echo site_url('detail_buku/detail/11'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/Kim.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">Kim Ji-young, Born 1982</p>
        <p class="mt-2 text-center">Cho Nam-joo</p>
      </div>
    </a>

    <!-- Kucing Lenyap -->
    <a href="<?php echo site_url('detail_buku/detail/12'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/Kucing.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">Jika Kucing Lenyap Dari Dunia</p>
        <p class="mt-2 text-center">Genki Kawamura</p>
      </div>
    </a>

    <!-- Pasien -->
    <a href="<?php echo site_url('detail_buku/detail/13'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/Pasien.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">Pasien</p>
        <p class="mt-2 text-center">Naomi Midori</p>
      </div>
    </a>

    <!-- Angsa -->
    <a href="<?php echo site_url('detail_buku/detail/14'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/angsa.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">Angsa dan Kelelawar</p>
        <p class="mt-2 text-center">Keigo Higashino</p>
      </div>
    </a>

    <!-- Selamat Tinggal -->
    <a href="<?php echo site_url('detail_buku/detail/15'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/SelamatTinggal.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">Selamat Tinggal</p>
        <p class="mt-2 text-center">Tere Liye</p>
      </div>
    </a>

  </div>
</div>


<!-- SECTION 4 -->
<div class="scroll-section">
  <div class="d-flex overflow-auto mt-3" style="gap:20px;">

    <!-- Anne -->
    <a href="<?php echo site_url('detail_buku/detail/16'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/Anne.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">Anne of Green Gables</p>
        <p class="mt-2 text-center">L.M Montgomery</p>
      </div>
    </a>

    <!-- Lemon Tree -->
    <a href="<?php echo site_url('detail_buku/detail/17'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/LemonTree.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">As Long As The Lemon Trees Grow</p>
        <p class="mt-2 text-center">Zoulfa Katouh</p>
      </div>
    </a>

    <!-- Little Women -->
    <a href="<?php echo site_url('detail_buku/detail/18'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/LittleWoman.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">Little Women</p>
        <p class="mt-2 text-center">Louisa May Alcott</p>
      </div>
    </a>

    <!-- Pride Prejudice -->
    <a href="<?php echo site_url('detail_buku/detail/19'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/Pride.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">Pride and Prejudice</p>
        <p class="mt-2 text-center">Jane Austen</p>
      </div>
    </a>

    <!-- Teka Teki Shaka -->
    <a href="<?php echo site_url('detail_buku/detail/20'); ?>" style="text-decoration:none; color:inherit;">
      <div class="book-card" style="min-width:180px;">
        <img src="<?php echo base_url('asset/Shaka.jpeg'); ?>" class="book-img">
        <p class="mt-2 text-center">Teka Teki Shaka</p>
        <p class="mt-2 text-center">Zahira Aulia</p>
      </div>
    </a>

  </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
