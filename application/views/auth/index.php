<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="<?= site_url('resource/assets/css/main/app.css') ?>">
    <link rel="stylesheet" href="<?= site_url("resource/assets/css/pages/auth.css") ?>">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-6 col-lg-6 col-12">
                <div class="card border-1">
                    <div class="card-body">
                        <h3>Sistem Informasi Siyolas Asmara</h3>
                        <hr>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" placeholder="Enter Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" placeholder="Enter Password" class="form-control">
                        </div>
                        <button class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>