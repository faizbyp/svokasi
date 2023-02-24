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
        <?php
          wp_nav_menu(array(
              'theme_location' => 'top-menu',
              'container' => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id' => 'navbarNav',
              'menu_class' => 'navbar-nav justify-content-evenly',
              'walker' => new Walker_Top_Menu()
          ));
        ?>
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