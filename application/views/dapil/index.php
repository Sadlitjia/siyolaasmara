<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/header") ?>

<body>
    <div class="app" id="app">
        <?php $this->load->view('layouts/sidebar') ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Informasi Dapil</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12 justify-content-between">
                        <div class="row">
                            <div class="card w-25 me-4 mh-100">
                                <img src="<?= site_url('resource/assets/images/logo/logo.png') ?>" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <a href="">Kota Gorontalo </a>
                                </div>
                            </div>
                            <div class="card w-25 me-4 mh-100">
                                <img src="<?= site_url('resource/assets/images/logo/logo.png') ?>" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <a href="">Kabupaten Bone Bolango </a>
                                </div>
                            </div>
                            <div class="card w-25 me-4 mh-100">
                                <img src="<?= site_url('resource/assets/images/logo/logo.png') ?>" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <a href="">Kabupaten Gorontalo Utara</a>
                                </div>
                            </div>
                            <div class="card w-25 me-4 mh-100">
                                <img src="<?= site_url('resource/assets/images/logo/logo.png') ?>" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <a href="">Kabupaten Gorontalo</a>
                                </div>
                            </div>
                            <div class="card w-25 me-4 mh-100">
                                <img src="<?= site_url('resource/assets/images/logo/logo.png') ?>" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <a href="">Kabupaten Pohuwato</a>
                                </div>
                            </div>
                            <div class="card w-25 me-4 mh-100">
                                <img src="<?= site_url('resource/assets/images/logo/logo.png') ?>" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <a href="">Kabupaten Boalemo</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php $this->load->view('layouts/footer') ?>
</body>

</html>