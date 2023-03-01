 <div class="row my-3">
   <?php

    $berita = svokasiGetPostBy('berita');
    if (!empty($berita)) {
      foreach ($berita as $post) {
        get_template_part('template-part/content/post-card');
      }
    } else {
      get_template_part('template-part/content/post-card-none');
    }

    ?>
 </div>