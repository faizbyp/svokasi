<div class="row my-3">
   <?php

    $pengumuman = svokasiGetPostBy('pengumuman');
    if (!empty($pengumuman)) {
      foreach ($pengumuman as $post) {
        get_template_part('template-part/content/post-card');
      }
    } else {
      get_template_part('template-part/content/post-card-none');
    }

    ?>
 </div>