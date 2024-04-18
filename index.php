<?php
include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
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
                    <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
                    <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <?php
                $query = mysqli_query($koneksi, "SELECT * FROM foto");
                while($data = mysqli_fetch_array($query)){
            ?>
            <div class="col-md-3 mt-2">
                <div class="card">
                    <img style="height: 12rem;" src="assets/img/<?php echo $data['lokasifile']; ?>" class="card-img-top" title="<?php echo $data['judulfoto']; ?>">
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
        <p>&copy Angga Dwi Prasetio</p>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </footer>
</body>
</html>
