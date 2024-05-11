<?php
  include 'koneksi.php';
  
  if (isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempatL'];
    $tanggal_lahir = $_POST['tanggalL'];
    $no_WA = $_POST['noWA'];
    $alamat = $_POST['alamat'];
    $nama_ayah = $_POST['namaAyah'];
    $nama_ibu = $_POST['namaIbu'];
    $asal_gereja = $_POST['gereja'];
    $izin = $_POST['izin'];

    $queryTambah = mysqli_query($conn, "INSERT INTO tbl_daftarbaptis(nama,tempat_lahir,tanggal_lahir,no_wa,alamat,nama_ayah,nama_ibu,asal_gereja,diizinkan) VALUES ('$nama','$tempat_lahir','$tanggal_lahir','$no_WA','$alamat','$nama_ayah','$nama_ibu','$asal_gereja','$izin')");
    
    if (mysqli_affected_rows($conn) > 0) {
      echo "
            <script>
              alert('data berhasil ditambahkan!');
            </script>
        ";
    } else {
      echo "
            <script>
                alert('data gagal ditambahkan!');
            </script>
        ";
    }
  }
?>

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
    <link rel="stylesheet" href="styleRenungan.css" />

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
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
          <li><a href="home.php #renungan" class="nav renungan">Renungan</a></li>
          <li><a href="home.php #jadwal" class="nav jadwal">Jadwal</a></li>
          <li class="cbo">
            <a href="#daftar" class="nav daftar select"
              >Daftar<i width="1.3rem" data-feather="chevron-down"></i
            ></a>
            <ul class="value">
              <li>
                <a href="daftarJemaat.php" class="sub-nav">Jemaat</a>
              </li>
              <li><a href="daftarBaptis.php" class="sub-nav select">Baptis</a></li>
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
        <p>Daftar untuk diBaptis</p>
      </div>
    </div>
    <!-- Header end -->

    <!-- Form Daftar Jemaat start -->
    <form method="post">
      <div class="formDaftar">
        <h3>Form Pendaftaran</h3>
        <div class="form">
          <div class="textBox">
            <div class="details">
              <p>Nama</p>
              <span>Wajib diisi</span>
            </div>
            <input
              type="text"
              name="nama"
              placeholder="Masukkan nama"
              required
            />
          </div>
          <div class="two-column">
            <div class="textBox">
              <div class="details">
                <p>Tempat Lahir</p>
                <span>Wajib diisi</span>
              </div>
              <input
                type="text"
                name="tempatL"
                placeholder="Masukkan tempat lahir"
                required
              />
            </div>
            <div class="textBox">
              <div class="details">
                <p>Tanggal Lahir</p>
                <span>Wajib diisi</span>
              </div>
              <input
                type="date"
                name="tanggalL"
                placeholder="Masukkan tanggal lahir"
                required
              />
            </div>
          </div>
          <div class="two-column">
            <div class="textBox">
              <div class="details">
                <p>Nomor Whatsapp</p>
                <span>Wajib diisi</span>
              </div>
              <input
                type="text"
                name="noWA"
                placeholder="Masukkan nomor whatsapp aktif"
                required
              />
            </div>
            <div class="rdbBox">
              <div class="details">
                <p>Gereja</p>
                <span>Wajib diisi</span>
              </div>
              <div class="rdb-container">
                <div class="rdb">
                  <input
                    type="radio"
                    name="gereja"
                    id="solaGratia"
                    value="Sola Gratia"
                    required="required"
                  />
                  <label for="solaGratia">Sola Gratia</label>
                </div>
                <div class="rdb">
                  <input
                    type="radio"
                    name="gereja"
                    id="luarSolaGratia"
                    value="Luar Sola Gratia"
                    required="required"
                  />
                  <label for="luarSolaGratia">Luar Sola Gratia</label>
                </div>
              </div>
            </div>
          </div>
          <div class="textAreaBox">
            <div class="details">
              <p>Alamat</p>
              <span>Wajib diisi</span>
            </div>
            <textarea
              name="alamat"
              id="alamat"
              placeholder="Masukkan alamat"
              required
            ></textarea>
          </div>
          <div class="textBox">
            <div class="details">
              <p>Nama Ayah</p>
              <span>Wajib diisi</span>
            </div>
            <input
              type="text"
              name="namaAyah"
              placeholder="Masukkan nama ayah"
              required
            />
          </div>
          <div class="textBox">
            <div class="details">
              <p>nama ibu</p>
              <span>Wajib diisi</span>
            </div>
            <input
              type="text"
              name="namaIbu"
              placeholder="Masukkan nama ibu"
              required
            />
          </div>
          <div class="rdbBox">
            <div class="detailsIzin">
              <p>Telah diIzinkan Orang Tua</p>
              <span
                >Sebelum melanjutkan proses pendaftaran, mohon konfirmasikan
                apakah Anda telah mendapatkan izin dari orang tua atau wali yang
                bertanggung jawab.</span
              >
            </div>
            <div class="rdb-container">
              <div class="rdb">
                <input
                  type="radio"
                  name="izin"
                  value="true"
                  required="required"
                />
                <label for="izin">diIzinkan</label>
              </div>
            </div>
          </div>
        </div>
        <div class="button-container">
          <input type="submit" name="daftar" value="Daftar" />
        </div>
      </div>
    </form>
    <!-- Form Daftar Jemaat end -->

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
  </body>
</html>
