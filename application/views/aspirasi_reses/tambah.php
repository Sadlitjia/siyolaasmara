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
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tambah Aspirasi Reses</h3>
                            <p class="text-subtitle text-muted">Multiple form layouts, you can use</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Aspirasi Reses</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Aspirasi</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Horizontal Form</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body ">
                                        <form class="form form-horizontal ">
                                            <div class="form-body ">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="nama_aleg">Nama Aleg</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="nama_aleg" class="form-control" name="nama_aleg">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="perangkat_daerah">Perangkat Daerah</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="perangkat_daerah" class="form-control" name="perangkat_daerah">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="lokasi">Lokasi</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="lokasi" class="form-control" name="lokasi">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="volume">Volume</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="volume" class="form-control" name="volume">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="indikator">Indikator Kinerja</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="indikator" class="form-control" name="indikator">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="a_masyarakat">Aspirasi Masyarakat</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type=" text" id="a_masyarakat" class="form-control" name="a_masyarakat">
                                                    </div>

                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
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