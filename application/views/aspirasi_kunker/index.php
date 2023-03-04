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
                            <h3>Aspirasi Kunker</h3>

                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Aspirasi Demo</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Data Aspirasi Demo
                        </div>
                        <div class="tambah_data ">
                            <a href="<?= base_url('Aspirasi_kunkerController/tambah_data') ?>" type="button" class="me-4 mb-2 btn btn-primary float-end">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Aleg</th>
                                        <th>Lokasi</th>
                                        <th>Waktu</th>
                                        <th>Aspirasi</th>
                                        <th>Dokumentasi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Agil</td>
                                        <td>Dinas PUPR</td>
                                        <td>Di Botu</td>
                                        <td>-+ 600 M</td>
                                        <td>pembuatan</td>
                                        <td>
                                            <a href="<?= base_url('Aspirasi_kunkerController/edit_data') ?>"><span class="badge bg-warning">edit</span></a>
                                            <a href=""><span class="badge bg-danger">hapus</span></a>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
    <?php $this->load->view('layouts/footer') ?>
</body>

</html>