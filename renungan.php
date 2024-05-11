<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Gereja</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,500;0,600;0,900;1,200;1,500;1,600;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- My CSS -->
    <link rel="stylesheet" href="styleRenungan.css?v=<?php echo time(); ?>" />

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <?php
      include 'koneksi.php'
    ?>
    <!-- Navbar start -->
    <div class="navbar transparent">
      <div class="logo">
        <img src="img/logo.png" />
        <a href="#home"
          ><p><span>GGP SOLA GRATIA</span> PONTIANAK</p>
        </a>
      </div>
      <div class="nav-navbar">
        <ul>
          <li><a href="home.php #home" class="nav home">Utama</a></li>
          <li><a href="home.php #about" class="nav about">Tentang</a></li>
          <li><a href="home.php #profile" class="nav profile">Profil</a></li>
          <li><a href="home.php #renungan" class="nav renungan select">Renungan</a></li>
          <li><a href="home.php #jadwal" class="nav jadwal">Jadwal</a></li>
          <li class="cbo">
            <a href="#daftar" class="nav daftar"
              >Daftar<i width="1.3rem" data-feather="chevron-down"></i
            ></a>
            <ul class="value">
              <li><a href="daftarJemaat.php" class="sub-nav">Jemaat</a></li>
              <li><a href="daftarBaptis.php" class="sub-nav">Baptis</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="extra-navbar">
        <i data-feather="menu" id="Menu"></i>
      </div>
    </div>
    <!-- Navbar end -->

    <!-- Header start -->
    <div class="header">
      <div class="content">
        <p>Renungan Harian</p>
      </div>
    </div>
    <!-- Header end -->

    <!-- Renungan start -->
    <div class="renungan">
      <div class="filter">
        <div class="bulan">
          <b
            ><i><p>Filter&nbsp;&nbsp;by&nbsp;&nbsp;:</p></i></b
          >
          <p>Bulan</p>
          <select name="bulan" id="bulan">
            <option value="01">Januari</option>
            <option value="02">Februari</option>
            <option value="03">Maret</option>
            <option value="04">April</option>
            <option value="05">Mei</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">Agustus</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
          </select>
        </div>
        <div class="search">
          <i width="1.5rem" data-feather="search"></i
          ><input type="text" name="search" id="search" />
        </div>
      </div>
      <div class="renungan-seluruh">
        <?php
          $hasil1 = mysqli_query($conn, 'SELECT * FROM tbl_renungan ORDER BY tanggal desc');
          while($baris1 = mysqli_fetch_array($hasil1)) :
          $tgl1 = date_create($baris1['tanggal']);
        ?>
        <div class="renungan-box">
          <h2><?= $baris1['topik'] ?></h2>
          <p>
            <i>
              <?= hari_ini(date_format($tgl1, 'D')) ?>,
              <?= date_format($tgl1, 'd-m-Y') ?>
            </i>
          </p>
          <p>" <?= $baris1['ayat'] ?> "
          </p>
          <p>
            <b><?= $baris1['injil'] ?></b>
          </p>
          <a onclick="pop_renungan()" style="cursor: pointer"
            >Lihat selengkapnya <i width="1.2rem" data-feather="arrow-right"></i
          ></a>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <!-- Renungan end -->

    <!-- Footer start -->
    <section class="footer" id="footer">
      <div class="footer-container">
        <div class="informasi">
          <div class="logo">
            <p><span>GGP SOLA GRATIA</span> PONTIANAK</p>
          </div>
          <div class="info">
            <div class="daftar">
              <p>DAFTAR</p>
              <a href="">Jemaat</a>
              <a href="">Baptis</a>
            </div>
            <div class="media">
              <p>MEDIA</p>
              <a href="">FaceBook</a>
              <a href="">Instagram</a>
              <a href="">YouTube</a>
              <a href="">TikTok</a>
            </div>
            <div class="ibadah">
              <p>IBADAH</p>
              <a href="">Jadwal</a>
              <a href="">Renungan</a>
            </div>
          </div>
        </div>
        <div class="hubungi">
          <div class="rekening">
            <p>Rekening Persembahan :</p>
            <h2>Nama<br /><span>BCA 0821892893</span></h2>
            <h2>Nama<br /><span>BCA 0821892893</span></h2>
          </div>
          <div class="Kontak">
            <p>Hubungi Kami :</p>
            <h2>Nama<br /><span>08218928933234</span></h2>
            <h2>Nama<br /><span>08218928934234</span></h2>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>Copyright@</p>
      </div>
    </section>
    <!-- Footer end -->
    <!-- Icons JS -->
    <script>
      feather.replace();
    </script>

    <!-- My JS -->
    <script src="js/script2.js"></script>

    <?php
      function hari_ini($hari){            
        switch($hari){
          case 'Sun':
            $hari_ini = "Minggu";
          break;
       
          case 'Mon':			
            $hari_ini = "Senin";
          break;
       
          case 'Tue':
            $hari_ini = "Selasa";
          break;
       
          case 'Wed':
            $hari_ini = "Rabu";
          break;
       
          case 'Thu':
            $hari_ini = "Kamis";
          break;
       
          case 'Fri':
            $hari_ini = "Jumat";
          break;
       
          case 'Sat':
            $hari_ini = "Sabtu";
          break;
          
          default:
            $hari_ini = "Tidak di ketahui";		
          break;
        }
        return $hari_ini;
      }
    ?>
  </body>
</html>
