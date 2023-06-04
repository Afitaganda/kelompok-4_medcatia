@extends('layouts.app')

@section('content')

<main>
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../images/CR3.jpg" alt="First Slide" class="d-block w-100">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Klinik Kucing</h1>
              <p>Pelayanan Kesehatan Bagi Kucing Anda.</p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/CR2.jpeg" alt="Second Slide" class="d-block w-100">
          <div class="container">
            <div class="carousel-caption">
              <h1>Lakukan Vaksinasi Pada Kucing</h1>
              <p>Salah satu pencegahan terhadap parasit-parasit yang membahayakan.</p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/CR1.jpg" alt="Third Slide" class="d-block w-100">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Penanganan Tebaik Pada Hewan</h1>
              <p>Fasilitas dan Pelayanan Terbaik untuk Kucing Anda. </p>
              <!-- <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </main>

  <div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row justify-content-center text-center" style="margin-top: 50px;">
        <div class="col-lg-4">
        <img src="../images/dok3.png" class="bd-placeholder-img rounded-circle" style="margin-bottom: 20px;" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img>
          <h2 class="fw-normal">Dr.Ronald</h2>
          <p>Dokter Hewan paling ramah, yang mampu memberikan penangan terbaik mengenai penyakit kulit yang diderita kucing anda.</p>
          <p><a class="btn btn-primary" href="#">Cek Jadwal »</a></p>
        </div>
        <div class="col-lg-4">
            <img src="../images/dok4.png" class="bd-placeholder-img rounded-circle" style="margin-bottom: 20px;" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img>
          <h2 class="fw-normal">Dr.Hendry</h2>
          <p>Dokter Hewan dengan kemampuan operasi penyakit dalam pada kucing, dengan pengalaman jam terbang yang tinggi.</p>
          <p><a class="btn btn-primary" href="#">Cek Jadwal »</a></p>
        </div>
        <div class="col-lg-4">
            <img src="../images/dok3.png" class="bd-placeholder-img rounded-circle" style="margin-bottom: 20px;" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img>
          <h2 class="fw-normal" >Dr.Thomas</h2>
          <p>Dokter Hewan Profesional yang siap menangani segala permasalahan organ vital yang dialami hewan peliharaan anda.</p>
          <p style="padding-bottom: 50px;"><a class="btn btn-primary" href="#">Cek Jadwal »</a></p>
        </div>
      </div>

      <div class="container-fluid rounded border-dark" id="mycontainer" style="padding: 30px;">
        <img src="../images/BR.png" alt="Gambar" width="300" height="200" />
        <div>
          <h1 style="padding-left: 20px;">Cerita Kami</h1>
          <p style="padding-left: 20px;">Dibangun secara tidak sengaja, karena banyak menemukan kucing-kucing yang tidak terawat diluar sana. Oleh karena itu dibangunlah klinik ini dengan harapan dapat membantu kucing yang butuh bantuan</p>
        </div>
      </div>


    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-6">
            <img src="../images/KE1.jpg" class="img-fluid mb-auto" style="width: 600px;">
          </div>
          <div class="paragraf col-md-6 mt-8">
            <div class="ms-auto">
              <p class="judul mt-auto">Fasilitas Ruang Tunggu </p>
              <p class="judul">yang Sangat Luas</p>
              <!-- <p class="judul"></p> -->
              <p style="margin-top: 20px;">Menyediakan ruang tunggu bagi pengunjung saat hewan peliharaannya sedang ditangani oleh dokter.</p>
              <button class="btn btn-primary btn-lg" id="button1">Selengkapnya >>></button>
          </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="paragraf col-md-6">
            <div class="ms-auto">
            <p class="judul mt-auto">Fasilitas Penginapan Kucing</p>
            <p class="judul">yang Aman dan Terawat</p>
            <!-- <p class="judul">siswa.</p> -->
            <p style="margin-top: 20px;">Anda dapat menitipkan kucing anda di penginapan kucing, apabila kucing anda perlu dirawat inap.</p>
            <button class="btn btn-primary btn-lg" id="button1">Selengkapnya >>></button>
            </div>
        </div>
        <div class="col-md-6">
            <img src="../images/KE2.jpg" class="img-fluid mb-auto" style="width: 600px;">
        </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-6">
            <img src="../images/KE3.jpeg" class="img-fluid mb-auto" style="width: 600px;">
          </div>
          <div class="paragraf col-md-6 mt-8">
            <div class="ms-auto">
              <p class="judul mt-auto">Cafe Bagi Pengunjung</p>
              <p class="judul">Menghabiskan Waktu</p>
              <!-- <p class="judul">siswa.</p> -->
              <p style="margin-top: 20px;">Kami menyediakan cafe yang nyaman untuk pelanggan yang ingin menghabiskan waktu sembari menunggu hewan peliharaan, tidak perlu khawatir merasa kebosanan!</p>
              <button class="btn btn-primary btn-lg" id="button1">Selengkapnya >>></button>
          </div>
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="paragraf col-md-6">
            <div class="ms-auto">
            <p class="judul mt-auto">Pet Shop</p>
            <p class="judul">Lengkap dan Terjamin</p>
            <!-- <p class="judul">siswa.</p> -->
            <p style="margin-top: 20px;">Menyediakan kebutuhan untuk kucing anda, dengan produk-produk yang sudah terjamin keamanannya.</p>
            <button class="btn btn-primary btn-lg" id="button1">Selengkapnya >>></button>
            </div>
        </div>
        <div class="col-md-6">
            <img src="../images/KE4.jpg" class="img-fluid mb-auto" style="width: 600px;">
        </div>
    </div>
    <hr class="featurette-divider">
</div>

@endsection
