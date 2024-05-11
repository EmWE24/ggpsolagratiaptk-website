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
    <link rel="stylesheet" href="styleHome.css?v=<?php echo time(); ?>" />

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <?php 
      include 'koneksi.php';
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
          <li><a href="#home" class="nav home">Utama</a></li>
          <li><a href="#about" class="nav about">Tentang</a></li>
          <li><a href="#profile" class="nav profile">Profil</a></li>
          <li><a href="#renungan" class="nav renungan">Renungan</a></li>
          <li><a href="#jadwal" class="nav jadwal">Jadwal</a></li>
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

    <!-- Home start -->
    <section class="hero" id="home">
      <div class="linear"></div>
      <div class="content">
        <div class="background-container">
          <img class="showing background" src="img/hero1.jpg" />
          <img class="background" src="img/hero2.jpg" />
          <img class="background" src="img/hero3.jpg" />
        </div>
        <video
          id="vidText"
          src="vid/SelamatDatang.mp4"
          autoplay
          loop
          muted
        ></video>
        <video
          id="vidBackground"
          src="vid/starBackground.mp4"
          autoplay
          loop
          muted
        ></video>
      </div>
    </section>
    <!-- Home end -->

    <!-- About start -->
    <section id="about">
      <div class="about-container">
        <h1>Tentang <span>Kami</span></h1>
        <p>
          <span>Lorem ipsum</span> dolor sit amet consectetur, adipisicing elit.
          Quibusdam, est architecto. Sapiente omnis rerum odio officia laborum
          unde eum harum laboriosam voluptatibus praesentium culpa quidem,
          mollitia aut. Perspiciatis, adipisci tenetur, nesciunt eligendi
          laboriosam vero suscipit dolore rem cumque repudiandae obcaecati
          ducimus ab corrupti qui rerum fuga fugit voluptas assumenda. Quam odit
          ut corporis vero ipsum iste dolor nulla reprehenderit. Temporibus
          velit esse ducimus sequi deleniti asperiores reiciendis veniam
          repellendus exercitationem voluptatibus, commodi fugiat iure incidunt
          ex voluptates dolore, maiores amet natus nemo quam necessitatibus ut.
          Tempora magni praesentium sit veritatis. Quo recusandae voluptatibus
          esse illum sit. Reprehenderit sint tenetur necessitatibus?
        </p>
        <div class="sosmed">
          <li>
            <a href="www.youtube.com"
              ><i data-feather="youtube" id="youtube-about"></i
            ></a>
          </li>
          <li>
            <a href="www.instagram.com"
              ><i data-feather="instagram" id="instagram-about"></i
            ></a>
          </li>
          <li>
            <a href="www.tiktok.com"
              ><i data-feather="music" id="music-about"></i
            ></a>
          </li>
        </div>
      </div>
    </section>
    <!-- About end -->

    <!-- Profile start -->
    <section id="profile">
      <div class="profile-container">
        <div class="title">
          <h1>PROFIL <span>GEMBALA</span></h1>
        </div>
        <div class="profileBoxGembala-container">
        <?php 
          $hasil1 = mysqli_query($conn, 'SELECT * FROM tbl_majelis WHERE majelis = "Ketua Majelis"');
          while ($baris1 = mysqli_fetch_array($hasil1)) :
        ?>
          <div class="profileBoxGembala">
            <div class="photoProfileGembala">
              <img src="img/profil.jpg" alt="Profile" />
            </div>
            <div class="contentProfileGembala">
              <div>
                <h2><?= $baris1['majelis'] ?></h2>
                <h3><?= $baris1['nama']?></h3>
                <p>
                  <?= $baris1['keterangan'] ?>
                </p>
              </div>
              <div class="sosmed">
                <p>Social media :</p>
                <div class="sosmed-container">
                  <li>
                    <a href="<?= $baris1['youtube'] ?>"
                      ><i data-feather="youtube" id="youtube-profile"></i
                    ></a>
                  </li>
                  <li>
                    <a href="<?= $baris1['instagram'] ?>"
                      ><i data-feather="instagram" id="instagram-profile"></i
                    ></a>
                  </li>
                  <li>
                    <a href="<?= $baris1['tiktok'] ?>"
                      ><i data-feather="music" id="music-profile"></i
                    ></a>
                  </li>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
        <div class="profileBoxPengurus-container">
        <?php 
          $hasil2 = mysqli_query($conn, 'SELECT * FROM tbl_majelis WHERE majelis != "Ketua Majelis"');
          while ($baris2 = mysqli_fetch_array($hasil2)) :
        ?>
          <div class="profileBoxPengurus">
            <div class="photoProfilePengurus">
              <img src="img/profil.jpg" alt="Profile" />
            </div>
            <div class="contentProfilePengurus">
              <h3><?= $baris2['majelis'] ?></h3>
              <p><?= $baris2['nama'] ?></p>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
    </section>
    <!-- Profile end -->

    <!-- Renungan start -->
    <section id="renungan">
      <div class="renungan-container">
      <?php
        $hasil3 = mysqli_query($conn, 'SELECT * FROM tbl_renungan order by tanggal desc limit 1');
        $baris3 = mysqli_fetch_array($hasil3);
      ?>
        <div class="content">
          <p id="ayat">
            " <?= $baris3['ayat'] ?> "
          </p>
          <p id="pasal"><?= $baris3['pasal'] ?></p>
          <a href="renungan.php">Lihat Renungan</a>
        </div>
        <div class="renungan-background">
          <img src="img/renungan.jpg" />
        </div>
      </div>
    </section>
    <!-- Renungan end -->

    <!-- Jadwal start -->
    <section id="jadwal">
      <div class="jadwal-container">
        <div class="title">
          <h1>JADWAL <span>IBADAH</span></h1>
        </div>
        <div class="jadwal-kini">
          <?php
            $hasil4 = mysqli_query($conn, 'SELECT * FROM tbl_jadwal WHERE tipe_jadwal = "online" order by tanggal desc limit 1');
            $baris4 = mysqli_fetch_array($hasil4);
            $tgl4 = date_create($baris4['tanggal']);
            $wkt4 = date_create($baris4['waktu']);

            $hasil5 = mysqli_query($conn, 'SELECT * FROM tbl_jadwal WHERE tipe_jadwal = "umum" order by tanggal desc limit 1');
            $baris5 = mysqli_fetch_array($hasil5);
            $tgl5 = date_create($baris5['tanggal']);
            $wkt5 = date_create($baris5['waktu']);

            $hasil6 = mysqli_query($conn, 'SELECT * FROM tbl_jadwal WHERE tipe_jadwal = "katekisasi" order by tanggal desc limit 1');
            $baris6 = mysqli_fetch_array($hasil6);
            $tgl6 = date_create($baris6['tanggal']);
            $wkt6 = date_create($baris6['waktu']);
          ?>
          <div class="jadwal-online">
            <div id="poster-border">
              <img src="img/<?= $baris4['poster'] ?>"/>
            </div>
            <h2>Online</h2>
            <table>
              <tr>
                <td><?= $baris4['nama_jadwal'] ?></td>
                <td><?= date_format($tgl4, 'd-m-Y'); ?></td>
                <td><?= date_format($wkt4, 'H:i'); ?></td>
              </tr>
            </table>
            <a href="<?= $baris4['link'] ?>" ><i data-feather="video"></i>Google Meet</a>
          </div>
          <div class="jadwal-umum">
            <div id="poster-border">
              <img src="img/<?= $baris5['poster'] ?>" />
            </div>
            <h2>Umum</h2>
            <table>
              <tr>
                <td><?= $baris5['nama_jadwal'] ?></td>
                <td><?= date_format($tgl5, 'd-m-Y'); ?></td>
                <td><?= date_format($wkt5, 'H:i'); ?></td>
              </tr>
            </table>
            <a href="<?= $baris5['link'] ?>"><i data-feather="map-pin"></i>Lokasi</a>
          </div>
          <div class="jadwal-katekisasi">
            <div id="poster-border">
              <img src="img/<?= $baris6['poster'] ?>" />
            </div>
            <h2>Katekisasi</h2>
            <table>
              <tr>
                <td><?= $baris6['nama_jadwal'] ?></td>
                <td><?= date_format($tgl6, 'd-m-Y'); ?></td>
                <td><?= date_format($wkt6, 'H:i'); ?></td>
              </tr>
            </table>
            <a href="<?= $baris6['link'] ?>"><i data-feather="info"></i>Lihat Selengkapnya</a>
          </div>
        </div>
        <div id="pembatas">
          <p>
          <?php
            $bulan_angka = date('m');
            $bulan_huruf = date('M');
          ?>
          Jadwal bulan <span><?= $bulan_huruf ?></span>
          </p>
        </div>
        <div class="jadwal-seluruh">
          <?php
            $hasil7 = mysqli_query($conn,'SELECT * FROM tbl_jadwal WHERE month(tanggal) = "'.$bulan_angka.'" AND tipe_jadwal = "umum" OR tipe_jadwal = "online" ORDER BY tanggal DESC');
            while($baris7 = mysqli_fetch_array($hasil7)) :
            $tgl7 = date_create($baris7['tanggal']);
            $wkt7 = date_create($baris7['waktu']);
          ?>
          <div class="jadwal-box">
            <div class="poster">
              <img src="img/<?= $baris7['poster'] ?>" />
            </div>
            <div class="informasi">
              <div class="keterangan">
                <p><?= $baris7['nama_jadwal'] ?></p>
              </div>
              <div class="waktu">
                <p><span><?= hari_ini(date_format($tgl7, 'D')) ?></span>, <?= date_format($tgl7, 'd-m-Y') ?></p>
                <p><span><?= date_format($wkt7, 'H:i') ?></span> WIB</p>
              </div>
              <div class="extra">
                <?php
                  echo '<p>P. Kudus</p>';
                  if($baris7['tipe_jadwal'] == "umum") {
                    echo '
                    <a href="'.$baris7["link"].'"><i width="1rem" data-feather="map-pin"></i>Lokasi</a>';
                  } elseif($baris7['tipe_jadwal'] == "online") {
                    echo '
                    <a href="'.$baris7["link"].'"><i width="1rem" data-feather="link"></i>Link</a>';
                  }
                ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
    </section>
    <!-- Jadwal end -->
    
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
    <script src="js/script.js?v=<?php echo time(); ?>"></script>

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
