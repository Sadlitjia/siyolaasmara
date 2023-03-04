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
                            <h3>Aspirasi Mandiri</h3>

                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Aspirasi Mandiri</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Data Aspirasi Mandiri
                        </div>
                        <div class="tambah_data ">
                            <a href="" type="button" class="ms-4 mb-2 btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Aspirasi</th>
                                        <th class="text-center float-end me-4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Agil</td>
                                        <td>-+ 600 M</td>
                                        <td>pembuatan</td>
                                        <td>
                                            <div class="text-center float-end ">
                                                <a href=""><span class="badge bg-warning">Edit</span></a>
                                                <a href=""><span class="badge bg-danger">Hapus</span></a>
                                            </div>
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