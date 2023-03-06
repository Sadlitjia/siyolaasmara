<!DOCTYPE html>
<html lang="en">
<?php $this->load->view("layouts/header") ?>

<body>
    <div class="app" id="app">
        <?php $this->load->view('layouts/sidebar') ?>
        <div id="main">
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Update Informasi Aleg</h3>

                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('InfoalegController/index') ?>">Informasi Aleg</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body" style="height: 400px;">
                                        <form action="" method=" post">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-aleg-tab" data-bs-toggle="pill" data-bs-target="#pills-aleg" type="button" role="tab" aria-controls="pills-aleg" aria-selected="true">Aleg</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-agenda-tab" data-bs-toggle="pill" data-bs-target="#pills-agenda" type="button" role="tab" aria-controls="pills-agenda" aria-selected="false">Aspirasi Reses</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-aspirasi-tab" data-bs-toggle="pill" data-bs-target="#pills-aspirasi" type="button" role="tab" aria-controls="pills-agenda" aria-selected="false">Aspirasi Reses</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-dokumentasi-tab" data-bs-toggle="pill" data-bs-target="#pills-dokumentasi" type="button" role="tab" aria-controls="pills-dokumentasi" aria-selected="false">Dokumentasi</button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-aleg" role="tabpanel" aria-labelledby="pills-aleg-tab">
                                                    <form class="form form-horizontal " method="post">
                                                        <div class="form-body ">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="nama">Nama</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="text" id="nama" class="form-control" name="nama">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="foto">Gambar</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="file" id="foto" class="form-control" name="foto">
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label for="dapil">Dapil</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <select class="form-select" id="dapil" name="dapil" aria-label="Default select example">
                                                                        <option selected>Pilih Dapil</option>
                                                                        <option value="kota">Kota Gorontalo</option>
                                                                        <option value="gorontalo_a">Kabupaten Gorontalo A</option>
                                                                        <option value="gorontalo_b">Kabupaten Gorontalo B</option>
                                                                        <option value="gorut">Kabupaten Gorontalo Utara</option>
                                                                        <option value="bonebol">Kabupaten Bone Bolango</option>
                                                                        <option value="boalemo">Kabupaten Boalemo-Pohuwato</option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="pills-agenda" role="tabpanel" aria-labelledby="pills-agenda-tab">
                                                    <form class="form form-horizontal " action="" method="post">
                                                        <div class="form-body ">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="date">Hari/Tanggal</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="date" id="date" class="form-control" name="date">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="waktu">Waktu</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="time" id="waktu" class="form-control" name="waktu">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="tempat">Tempat</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="text" id="tempat" class="form-control" name="tempat">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="keterangan">Keterangan</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="text" id="keterangan" class="form-control" name="keterangan">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="pills-aspirasi" role="tabpanel" aria-labelledby="pills-aspirasi-tab">
                                                    <form class="form form-horizontal " action="" method="post">
                                                        <div class="form-body ">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label for="aspirasi">Aspirasi</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <textarea name="aspirasi" id="aspirasi" class="w-100"></textarea>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="tempats">Tempat</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="text" id="tempats" class="form-control" name="tempats">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="pills-dokumentasi" role="tabpanel" aria-labelledby="pills-dokumentasi-tab">
                                                    <form class="form form-horizontal " action="" method="post">
                                                        <div class="form-body ">
                                                            <div class="row">
                                                                <h4>Dokumentasi Kegiatan Reses</h4>
                                                                <div class="col-md-4">
                                                                    <label for="foto1">Gambar 1</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="file" id="foto1" class="form-control" name="foto1">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="foto2">Gambar 2</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="file" id="foto2" class="form-control" name="foto2">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="foto3">Gambar 3</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="file" id="foto3" class="form-control" name="foto3">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="video">Video</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <input type="file" id="video" class="form-control" name="video">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class=" mb-3 me-3 position-absolute bottom-0 end-0">
                                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>

                                            </div>
                                        </form>
                                    </div>
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