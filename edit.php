<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <title>Data Penduduk</title>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #000814">
      <div class="container">
        <a class="navbar-brand" href="#">Data karyawan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="create.php">Home</a>
            <a class="nav-link" href="#">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    <?php
    include 'config.php';
    $id = $_GET['id'];
    $karyawan = mysqli_query($koneksi, "select * from karyawan where id='$id'");
    while ($data = mysqli_fetch_assoc($karyawan)){
    ?>
        <div class= "container mt-5">
            <p><a href="index.php">Home</a> / Detail Karyawan / <?php echo $data['nama']?></p>
            <div class="card">
                <div class="card-header">
                    <p class = fw-bold>Profil Karyawan</p>
                </div>
                <div class="card-body fw-bold">
                    <form method="post" action="update.php">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data['id'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa" name="nama" value="<?php echo $data['nama'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="Noktp" class="form-label">No.KTP</label>
                            <input type="text" class="form-control" id="Noktp" placeholder="Masukkan Nomor KTP" name="noktp" value="<?php echo $data['noktp'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="Telepon" class="form-label">No. Telepon</label>
                            <input type="text" class="form-control" id="Telepon" placeholder="Masukkan Nomor Telepon" name="telp" value="<?php echo $data['telp'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="Masuk" class="form-label">Tahun Masuk</label>
                            <input type="text" class="form-control" id="Masuk" placeholder="Masukkan Tahun Masuk" name="masuk" value="<?php echo $data['masuk'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="Selisih" class="form-label">Selisih Masa Kerja</label>
                            <input type="text" class="form-control" id="Selisih" placeholder="Selisih Masa Kerja" name="selisih" value="<?php echo $data['selisih'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                    </form>
                </div>
            </div>
        </div>
    <?php        
    }
    ?>
    </div>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>