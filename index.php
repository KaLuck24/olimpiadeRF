<!-- Alert data berhasil / gagal ditambahkan -->
<?php if(isset($_GET['status'])): ?>

    <?php
              if($_GET['status'] == 'sukses') {
                  echo "<div class='card text-bg-success mb-3 position-absolute top-50 start-50 translate-middle message' id='message' style='max-width: 18rem;'>
                  <div class='card-header text-center'>Berhasil!</div>
                  <div class='card-body justify-content-center'>
                    <h5 class='card-title text-center'>Data Sukses ditambahkan</h5>
                  </div>    
                </div>";
              } else {
                  echo "<div class='card text-bg-danger mb-3 position-absolute top-50 start-50 translate-middle message' id='message' style='max-width: 18rem;'>
                  <div class='card-header text-center'>Gagal!</div>
                  <div class='card-body justify-content-center'>
                    <h5 class='card-title text-center'>Data Anda Gagal ditambahkan</h5>
                  </div>    
                </div>";
              }
          
          ?>
 
  <?php endif; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran peserta lomba 2024 | Jawa Tengah</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"  
    />

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Bagian Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top shadow">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="brand">Olimpiade </span><span class="LogoBrand text-secoundary">Jateng</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="form_daftar.php">Pendaftaran</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Bagian Navbar -->

    <!-- Bagian Hero -->
    <section class="carousel pt-5">
      <div class="hero d-flex align-items-center justify-content-center text-light">
        <div class="row p-4 text-center position-absolute text-primary">
          <div class="col">
            <h1 class="fw-bold textHeader"><span class="tHeader">Selamat datang di </span>Olimpiade Jateng 2024</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Bagian Hero -->

    <!--Bagian Tombol Daftar -->
    <section class="daftar">
      <div class="container">
         <div class="row">

          <div class="col-md-6 d-flex justify-content-end">
  
            <a class="btn btn-center text-dark"
            href="form_daftar.php">Daftar Olimpiade
            Sekarang</a>
          </div>
          <div class="col-md-6 d-flex justify-content-start">
            <a class="btn btn-center text-dark"
            href="list_peserta.php">Lihat Peserta Olimpiade</a>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Akhir Bagian Tombol Daftar -->

    <!-- Bagian Sponsor -->
    <section class="container">
      <div class="row p-4 pt-5 pb-5 mt-5 mb-5 justify-content-center">
        <div class="col-md-2 p-3">
          <img src="Logo1.png" class="w-100" alt="">
        </div>
        <div class="col-md-2 p-3 align-items-center">
          <img src="Logo2.jpeg" class="w-100 h-100 align-items-center" alt="">
        </div>
        <div class="col-md-2 p-3">
          <img src="Logo3.jpg" class="w-100" alt="">
        </div>
      </div>
    </section>
    <!-- Akhir Bagian Sponsor -->
    
    <!-- Bagian Tanggal -->
    <section class="main note">
      <h4>PENDAFTARAN DIMULAI PADA TANGGAL 19 JULI 2024</h4>
    </section>
    <!-- Akhir Bagian Tanggal -->

    <!-- Bagian Lokasi  -->
    <footer class="bg-dark p-4 d-flex justify-content-center">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15839.58056104363!2d110.40661530781253!3d-7.021610699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b8736b24379%3A0x4ad3d9c5e12f8f7b!2sSint%20Louis%20Senior%20High%20School!5e0!3m2!1sen!2sid!4v1716963132946!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </footer>
    <!-- Akhirs Bagian Lokasi -->

    <!-- Link Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <!-- Menampilkan alert waktu 1.5 detik -->
    <script>
      let message = document.querySelector('.message');
      const tes = setTimeout(() => {
        message.style.display = 'none';
      }, 1500);

     if (message) {
      tes();
     }

    </script>
  </body>
</html>
