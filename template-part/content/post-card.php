<div class="col-12 col-lg-4 mb-4">
    <div class="card">
        <!-- <?php var_dump(get_the_post_thumbnail_url($post))?> -->
        <img src="<?php
                    if (get_the_post_thumbnail_url($post)) {
                        echo get_the_post_thumbnail_url($post);
                    } else {
                        echo getImageFromTemplate('LOGO SV IPB.png');
                    }
                    ?>" alt="<?= $post->post_title ?>" class="card-img-top">
        <div class="card-body">
            <p class="card-text fw-bold"><?= $post->post_title ?></p>
            <?php for($i = 0; $i < 2; $i++){ ?>
            <button class="btn btn-outline-primary rounded-pill"><?= get_the_category()[$i]->name?></button>
            <?php } ?>
            <span>5 November 2022</span>
        </div>
    </div>
</div>