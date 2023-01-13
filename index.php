<?php
include  "koneksi.php";
if(isset ($_POST['bsimpan'])){
$simpan = mysqli_query ($connect, "insert into biodata set 
              Nama = '$_POST[tnama]',
              Nim = '$_POST[tnim]',
              Jurusan = '$_POST[tjurusan]',
              Asal = '$_POST[tasal]',
              Tanggal_Lahir = '$_POST[tlahir]'");

$simpan = mysqli_query ($connect, "insert into pendidikan set 
              Nama = '$_POST[tnama]',
              Lulusan_SD = '$_POST[tsd]',
              Lulusan_SMP = '$_POST[tsmp]',
              Lulusan_SMA= '$_POST[tsma]'");
if($simpan){
                echo "<script>
                      alert('Simpan data Sukses!');
                      document.location= 'index.php';
                      </script>";
}else {
              echo "<script>
                    alert('Simpan data Gagal!');
                    document.location='index.php';
                    </script>";
              }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio_Puri</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v4.9.2
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <!-- Template boostrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Beranda</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Tentang</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Rangkuman</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Kontak</span></a></li>
        <li><a href="#input" class="nav-link scrollto"><i class="bi bi-table"></i> <span>Form Input</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Puri</h1>
      <p>Hai saya <span class="typed" data-typed-items="Mahasiswa, Developer, Potograper"></span></p>
      <div class="social-links">
        <a href="https://www.facebook.com/profile.php?id=100012133218609" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/puriii_i?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.tiktok.com/@purii_i?_t=8WvfV22dw4v&_r=1" class="tiktok"><i class="bx bxl-tiktok"></i></a>
        <a href="https://discord.gg/X4rrbghN" class="discord"><i class="bx bxl-discord"></i></a>


      </div>
    </div>
  </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Saya</h2>
          <p>Hai!, perkenalkan namaku Puri berasal dari kota Palopo, Sulawesi Selatan. Saat ini menempuh pendidikan di Universitas Cokroaminoto Palopo semester 5 jurusan Informatika. Tertarik dengan UI/UX dan fotografi.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="assets/img/profile-bg.JPG" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>UI/UX Designer &amp; Web Developer.</h3>
            <div class="row">
              <div class="col-lg-8">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong> <span>18 Februari 2002</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>No Telepon:</strong> <span>+825 341 871 228</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Daerah Asal:</strong> <span>Kota Palopo, Sulawesi Selatan, Indonesia</span></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span>20</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Status:</strong> <span>Mahasiswa</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>puripalopo@gmail.com</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Keterampilan</h2>
          <p>Berikut presentasi beberapa keterampilan yang saya miliki</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">40%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">20%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">20%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Vn/Video Editor <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Canva <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Rangkuman</h2>
          <p>Berikut mengenai riwayat pendidikan saya dan beberapa kegiatan yang pernah saya ikuti.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Riwayat Pendidikan</h3>
            <div class="resume-item">
              <h4>Sekolah Dasar</h4>
              <h5>2009 - 2014</h5>
              <p><em>Sekolah Dasar Negeri 35 Lamandu, Kota Palopo</em></p>
            </div>

            <div class="resume-item">
              <h4>Sekolah Menengah Pertama</h4>
              <h5>2014 - 2017</h5>
              <p><em>Sekolah Menengah Pertama Negeri 7 Palopo, Kota Palopo</em></p>
            </div>

            <div class="resume-item">
              <h4>Sekolah Menengah Atas</h4>
              <h5>2017 - 2020</h5>
              <p><em>Sekolah Menengah Atas 6 Palopo</em></p>
            </div>

            <div class="resume-item">
              <h4>Kuliah</h4>
              <h5>2020 - Sekarang</h5>
              <p><em>Universitas Cokroaminoto Palopo</em></p>
            </div>

          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Pengalaman</h3>

            <div class="resume-item">
              <h4>Kegiatan Yang pernah diikuti</h4>
              <h5>2017 - Sekarang</h5>
              <ul>
                <li>Angggota Paskibraka Sekolah SMAN 6 Palopo.</li>
                <li>Relawan Komunitas Koin Untuk Negeri Cabang Kota Palopo</li>
                <li>Peserta MathAction tingkat Kota Palopo</li>
                <li>Peserta Festival Pelajar</li>
                <li>Sekolah Jejak Nusantara 8 di Desa Poringan, Suli, Luwu</li>
                <li>Kampoeng Teknik oleh Himpunan Mahasiswa Teknik Informatika UNCP</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Resume Section -->

    <!-- ======= Proyek Terbaru ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Proyek Terbaru</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/project2.png" class="rounded" width=500px alt="">
                <h3>Navigasi Dan Frame</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/project3.png" class="rounded" width=500px alt="">
                <h3>Rest Food</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/project1.png" class="rounded" width=500px alt="">
                <h3>Portfolio Menggunakan Tailwind CSS </h3>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hubungi Saya</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl.KHM.Kasim Lorong Kualalmpur, Kota Palopo, Sulawesi Selatan</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>puripalopo@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>+825 341 871 228</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Emal Anda" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Memuat</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan Anda Telah Terkirim, Terima Kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

<!-- Form Input Data Mahasiswa -->
      <!-- Awal Container -->
      <section id="input" class="input mt-5">
        <div class="container" data-aos="fade-up">
            <h3 class="text-center"><strong>Form Input</strong></h3>

            <!-- awal row -->
            <div class="row">
              <div class="col-md-8 mx-auto">
                <!-- awal card -->
                  <div class="card mt-3">
                      
                      <div class="card-body">
                        <!-- awal form -->
                          <form method="POST">
                            <div class="card-header bg-primary text-light text-center">
                            <strong>Form Input Biodata</strong> 
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Nama</label>
                              <input type="text" name="tnama" class="form-control" placeholder="Masukkan Nama">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Nim</label>
                              <input type="text" name="tnim" class="form-control" placeholder="Masukkan Nim">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Jurusan</label>
                              <input type="text" name="tjurusan" class="form-control" placeholder="Masukkan Jurusan">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Asal</label>
                              <input type="text" name="tasal" class="form-control" placeholder="Masukkan Tempat Asal">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Tanggal Lahir</label>
                              <input type="date" name="tlahir" class="form-control" placeholder="Masukkan Tanggal lahir">
                            </div>

                            <div class="card-header bg-primary text-light text-center">
                              <strong>Form Input Pendidikan</strong> 
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Lulusan SD</label>
                                <input type="text" name="tsd" class="form-control" placeholder="Masukkan Lulusan SD">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Lulusan SMP</label>
                                <input type="text" name="tsmp" class="form-control" placeholder="Masukkan Lulusan SMP">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Lulusan SMA</label>
                                <input type="text" name="tsma" class="form-control" placeholder="Masukkan Lulusan SMA">
                            </div>

                            <div class="text-center">
                                <button class="btn btn-primary" name="bsimpan" type="submit"> Simpan</button>
                            </div>
                        </form>
                        <!-- akhir form -->
                      </div>
                      <div class="card-footer bg-primary">

                      </div>
                  </div>
                <!-- akhir card -->
              </div>
            </div>
            <!-- akhir row -->

              <!-- awal card -->
                <div class="card mt-4">
                          <div class="card-body">

                            <h5 class="text-center">Tabel Biodata</h5>
                            <table class="table table-striped table-hover table-bordered">
                              <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Nim</th>
                                  <th>Jurusan</th>
                                  <th>Asal</th>
                                  <th>Tanggal Lahir</th>
                              </tr>
                              <?php

include "koneksi.php";
$No=1;
$ambildata = mysqli_query($connect, "select * from biodata");
while ($tampil = mysqli_fetch_array ($ambildata)){
echo "
      <tr>
            <td>$No</td>
            <td>$tampil[Nama]</td>
            <td>$tampil[Nim]</td>
            <td>$tampil[Jurusan]</td>
            <td>$tampil[Asal]</td>
            <td>$tampil[Tanggal_Lahir]</td>
      </tr>";
      $No++;
}
?>

                            </table>

                            <h5 class="text-center mt-4">Tabel Pendidikan</h5>
                            <table class="table table-striped table-hover table-bordered">
                              <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Lulusan SD</th>
                                  <th>Lulusan SMP</th>
                                  <th>Lulusan SMA</th>
                              </tr>

<?php

include "koneksi.php";
$No=1;
$ambildata = mysqli_query($connect, "select * from pendidikan");
while ($tampil = mysqli_fetch_array ($ambildata)){
echo "
      <tr>
            <td>$No</td>
            <td>$tampil[Nama]</td>
            <td>$tampil[Lulusan_SD]</td>
            <td>$tampil[Lulusan_SMP]</td>
            <td>$tampil[Lulusan_SMA]</td>
      </tr>";
      $No++;
}
?>
                            </table>

                          </div>
                </div>
                <!-- akhir card -->

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      </section>   
         
      <!-- Akhir Container -->  




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Maspurr</h3>
      <p>“Pengalaman tidak bisa dipelajari, tapi harus dilalui.” <br>BJ Habibie</p>
      <div class="social-links">
        <a href="https://discord.gg/X4rrbghN" class="discord"><i class="bx bxl-discord"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100012133218609" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/puriii_i?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.tiktok.com/@purii_i?_t=8WvfV22dw4v&_r=1" class="tiktok"><i class="bx bxl-tiktok"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Portfolio Puri</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>