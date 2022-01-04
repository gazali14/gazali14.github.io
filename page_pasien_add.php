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
    <div class="w-50 mx-auto border p-3 mt-3">
        <a href="page_pasien.php">Kembali</a>
        <form action="" methode="get">
            <label for="id_pasien">ID Pasien</label>
            <input type="text" id="id_pasien" name='id_pasien' class="form-control" required>

            <label for="nama_pasien">Nama Pasien</label>
            <input type="text" id="nama_pasien" name='nama_pasien' class="form-control" required>

            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" id="tgl_lahir" name='tgl_lahir' class="form-control" required>

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name='alamat' class="form-control" required>
            
            <label for="telpon">Telepon</label>
            <input type="text" id="telpon" name='telpon' class="form-control" required>

            <label for="telpon">Jenis Penyakit</label>
            <input type="text" id="jenis_penyakit" name='jenis_penyakit' class="form-control" required>

            <input class="btn btn-success mt-3" name="btn" type="submit" value="Tambah">
        </form>
        
    </div>

    <?php
        $id=$_GET['id_pasien'];
        $nama=$_GET['nama_pasien'];
        $tgl=$_GET['tgl_lahir'];
        $alamat=$_GET['alamat'];
        $telpon=$_GET['telpon'];
        $jenis_penyakit=$_GET['jenis_penyakit'];
        if ($_GET['btn']=="Tambah"){
            $cek=mysqli_num_rows(mysqli_query($connect,"SELECT * FROM pasien WHERE id_pasien='$id'"));
            $sql="INSERT INTO pasien(id_pasien,nama_pasien,tgl_lahir,alamat,telpon,jenis_penyakit) VALUES ('$id','$nama','$tgl','$alamat','$telpon','$jenis_penyakit')";
            $sqlinsert=mysqli_query($connect,$sql);

            
            if (isset($sqlinsert) && $cek <= 0) {
                echo "
                    <div class='alert alert-success'>Data berhasil ditambahkan <a href='page_pasien.php'>Lihat data</a></div>
                ";
            }else if($cek >= 1){
                echo"
                    <div class='alert alert-danger'>Data gagal ditambahkan <a href='page_pasien.php'>Lihat data</a></div>
                ";
        }
        }
        
        
    ?>
</body>
</html>