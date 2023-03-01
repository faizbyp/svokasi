<!DOCTYPE html>
<html lang="en">

<head>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- 
<nav class="navbar bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="wp-content/themes/svokasi/assets/img/LOGO SV IPB.png" alt="Logo" class="d-inline-block align-text-top">
    </a>
  </div>
</nav>
-->
  <?php
  // if (has_nav_menu('top')) {
  //   print_r(wp_nav_menu(array('theme_location' => 'top'))); 
  // }
  ?>
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="row flex-grow-1">
        <a class="navbar-brand col-2" href="#">
          <img src="wp-content/themes/svokasi/assets/img/LOGO SV IPB.png" alt="Logo" class="d-inline-block align-text-top">
        </a>

        <div class="col">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav justify-content-evenly">
              <!-- <li class="nav-item">
                <a class="nav-link text-white" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Akademik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Pendaftaran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Kampus Sukabumi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">SDGs</a>
              </li> -->
            </ul>
          </div>
        </div>

        <div class="col-3 justify-content-end">
          <form class="d-flex bg-white rounded-pill" role="search">
            <div class="input-group">
              <input type="text" class="form-control shadow-none rounded-pill">
              <div class="input-group-append">
                <button class="btn" type="button">🔍</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </nav>