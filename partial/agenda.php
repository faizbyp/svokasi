<div class="row my-3">
    <?php

    $agenda = svokasiGetPostBy('agenda');
    if (!empty($agenda)) {
        foreach ($agenda as $post) {

    ?>
            <a href="#" class="col-12 col-lg-4 mb-4 text-decoration-none">
                <div class="card">
                    <img src="wp-content/themes/svokasi/assets/img/image 20.png" class="card-img-top" alt="...">
                    <div class="card-body text-black">
                        <h6 class="card-text">17 Agustus</h6>
                        <h6 class="card-title fw-bold">Judul Kartu</h6>
                        <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </a>
        <?php
        }
    } else {
        ?>
        <a href="#" class="col-12 col-lg-4 mb-4 text-decoration-none">
            <div class="card">
                <img src="wp-content/themes/svokasi/assets/img/image 20.png" class="card-img-top" alt="...">
                <div class="card-body text-black">
                    <h6 class="card-text">17 Agustus</h6>
                    <h6 class="card-title fw-bold">Judul Kartu</h6>
                    <p class="card-text text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </a>
    <?php
    }

    ?>
</div>