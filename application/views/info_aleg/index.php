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
                            <h3>Informasi Aleg</h3>

                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Informasi Aleg</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="tambah_data mt-4">
                            <a href="<?= base_url('InfoalegController/tambah_data') ?>" type="button" class="ms-4 btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Dapil</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="">Agil</a></td>
                                        <td><a href="">asdgj</a> </td>
                                        <td class="text-center">
                                            <div>
                                                <a href="<?= base_url('InfoalegController/edit_data') ?>"><span class="badge bg-warning">Edit</span></a>
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