<?php
    include "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Data Pasien</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <img src="img/buton selatan.png" alt="logo" width="58" height="45">
        <img src="img/Puskesmas Logo.png" alt="logo" width="58" height="45">
        <a class="navbar-brand font-weight-bold" href="#"> &nbsp; Puskesmas Desa Gerak Makmur</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container mt-5" style="text-align: center;">
        <h2 class="text-uppercase mb-4 font-weight-bold m-auto">Data Pasien</h2>
    </div>

    <div class="container mt-5">
        <a href="page_pasien_add.php" class="btn btn-primary btn-md mb-3">Tambah Data</a>
        <table class="table table-striped table-hover table-bordered table-white">
            <thead>
                <th>ID Pasien</th>
                <th>Nama Pasien</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Jenis Penyakit</th>
                <th>Aksi</th>
            </thead>

            <?php
                $hasil=mysqli_query($connect,"SELECT * FROM pasien");
                while($data=mysqli_fetch_array($hasil))
                {
                  echo "
                    <tbody>
                        <td>$data[id_pasien]</td>
                        <td>$data[nama_pasien]</td>
                        <td>$data[tgl_lahir]</td>
                        <td>$data[alamat]</td>
                        <td>$data[telpon]</td>
                        <td>$data[jenis_penyakit]</td>
                        <td>
                            <div class='row'>
                                <div class='col d-flex justify-content-center'>
                                    <a href='page_pasien_update.php?id_pasien=$data[id_pasien]' class='btn btn-sm btn-warning'>Update</a>
                                </div>
                                <div class='col d-flex justify-content-center'>
                                    <a href='page_pasien_delete.php?id_pasien=$data[id_pasien]' class='btn btn-sm btn-danger'>Delete</a>
                                </div>
                            </div>
                        </td>
                    </tbody>
                  ";		  
                }
            ?>

        </table>
    </div>
</body>
</html>