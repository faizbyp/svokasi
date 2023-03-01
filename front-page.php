<?php get_header(); ?>

<section class="container-fluid d-flex hero">
  <div class="row align-items-center w-100 flex-grow-1">
    <div class="col">
      <h1 class="text-accent text-center fw-bold"><span class="text-white">“To be</span> The Premiere Choice <span class="text-white">for</span><br>Higher Vocational Education”</h1>
    </div>
  </div>
</section>

<section class="container-lg py-5">
  <div class="row">
    <div class="col-12 col-lg-8">
      <h2 class="fw-bold">Kenapa harus Sekolah Vokasi IPB?</h2>
      <p class="fw-bold text-muted">Sekolah Vokasi IPB mengedepankan pendidikan praktik yang lebih banyak dari pada pendidikan teori. Sehingga dengan itu kamu akan lebih mampu memahami permasalahan dan penyelesaian di lapangan.</p>
      <button class="btn btn-accent rounded-pill fw-bold text-white">Selengkapnya</button>
      <button class="btn btn-outline-accent rounded-pill fw-bold">Lihat Prestasi</button>
      <img src="wp-content/themes/svokasi/assets/img/nilaivokasi.svg" alt="" class="w-100 my-4">
    </div>
    <div class="col-12 col-lg-4">
      <img src="wp-content/themes/svokasi/assets/img/card content.svg" alt="" class="w-100">
    </div>
  </div>
</section>

<section class="container-fluid py-5 informasi">
  <section class="container-lg">
    <div class="row">
      <h2 class="col-12 text-center fw-bold">Informasi Terbaru</h2>
      <div class="col-12 item-align-center d-flex justify-content-center gap-2" role="tablist">
        <ul class="nav nav-pills mb-3 d-flex justify-content-center gap-2" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="btn btn-secondary fw-semibold active" id="nav-berita-tab" data-bs-toggle="tab" data-bs-target="#nav-berita" type="button" role="tab" aria-controls="nav-berita" aria-selected="true">
              <img src="wp-content/themes/svokasi/assets/img/icon berita.svg" alt="">
              Berita</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="btn btn-grey text-secondary fw-semibold" id="nav-pengumuman-tab" data-bs-toggle="tab" data-bs-target="#nav-pengumuman" type="button" role="tab" aria-controls="nav-pengumuman" aria-selected="false">
              <img src="wp-content/themes/svokasi/assets/img/icon horn.svg" alt="">
              Pengumuman</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="btn btn-grey text-secondary fw-semibold" href="/#agenda"> <img src="wp-content/themes/svokasi/assets/img/icon calendar.svg" alt=""> Agenda</a>
          </li>




        </ul>
      </div>
    </div>

    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-berita" role="tabpanel" aria-labelledby="nav-berita-tab">
        <?php require_once 'partial/berita.php'; ?>
      </div>
      <div class="tab-pane fade" id="nav-pengumuman" role="tabpanel" aria-labelledby="nav-pengumuman-tab">
        <?php require_once 'partial/pengumuman.php'; ?>
      </div>
    </div>


  </section>
</section>

<section class="container-fluid py-5 explore">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4 my-3">
        <a href="#" class="card">
          <img src="wp-content/themes/svokasi/assets/img/image 14.png" class="card-img" alt="...">
          <div class="card-img-overlay d-flex">
            <span class="text-center m-auto">
              <h1 class="fw-bold text-accent">E-Brosur</h1>
              <p class="text-white">Download E-Brosur SV IPB</p>
            </span>
          </div>
        </a>
      </div>
      <div class="col-12 col-lg-8 my-3">
        <a href="#" class="card">
          <img src="wp-content/themes/svokasi/assets/img/image 15.png" class="card-img" alt="...">
          <div class="card-img-overlay d-flex">
            <span class="text-center m-auto">
              <h1 class="fw-bold text-accent">Virtual Tour</h1>
              <p class="text-white">Jelajah Kampus Virtual</p>
            </span>
          </div>
        </a>
      </div>
      <div class="col-12 col-lg-7 my-3">
        <a href="#" class="card">
          <img src="wp-content/themes/svokasi/assets/img/image 16.png" class="card-img" alt="...">
          <div class="card-img-overlay d-flex">
            <span class="text-center m-auto">
              <h1 class="fw-bold text-accent">Pendaftaran</h1>
              <p class="text-white">Informasi Seputar Pendaftaran</p>
            </span>
          </div>
        </a>
      </div>
      <div class="col-12 col-lg-5 my-3">
        <a href="#" class="card">
          <img src="wp-content/themes/svokasi/assets/img/image 17.png" class="card-img" alt="...">
          <div class="card-img-overlay d-flex">
            <span class="text-center m-auto">
              <h1 class="fw-bold text-accent">Produk Inovasi</h1>
              <p class="text-white">Inovasi SV IPB</p>
            </span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid py-5 prodi">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3">
        <img src="wp-content/themes/svokasi/assets/img/frame 55.png" class="img-fluid" alt="">
      </div>
      <div class="col-12 col-lg-9">
        <h3 class="fw-bold">Program Studi Sekolah<br>Vokasi IPB University</h3>
        <p class="text-muted">Sekolah Vokasi IPB menyelenggarakan program pendidikan<br>yang terdiri dari 17 Program Studi.</p>
        <span class="fw-bold"><span class="display-1 text-accent">17 </span>Program Studi</span>
        <span class="fw-bold ms-5"><span class="display-1 text-accent">7.128 </span>Mahasiswa Aktif</span>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid py-5 agenda">
  <section class="container-lg" id="agenda">
    <div class="row">
      <h2 class="col-12 text-center fw-bold">Agenda Sekolah Vokasi IPB</h2>
    </div>
      
    <?php require 'partial/agenda.php'; ?>

    <div class="row my-1">
      <div class="col text-center">
        <button class="btn btn-accent rounded-pill text-white fw-bold">Selengkapnya</button>
      </div>
    </div>
  </section>
</section>

<?php get_footer(); ?>