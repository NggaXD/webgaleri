<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a href="register.php" class="btn btn-outline-priamry m-1">Daftar</a>
                    <a href="login.php" class="btn btn-outline-succes m-1">Masuk</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body bg-succes">
                        <div class="text-center">
                            <h5>Login Website</h5>
                        </div>
                        <form action="config/aksi_login.php" method="POST">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                            <label class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" required>
                            <div class="class-grid mt-2">
                                <button class="btn btn-primary" type="submit" name="kirim">Masuk</button>
                            </div>
                        </form>
                        <hr>
                        <p>Belum Punya Akun? <a href="register.php">Daftar Disini!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
        <p>&copy Angga Dwi Prasetio</p>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>