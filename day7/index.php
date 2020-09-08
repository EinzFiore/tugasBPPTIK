<!doctype html>
<html lang="en">
<?php
    // Memulai Session
    error_reporting(false);
    session_start();
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Datepicker Bootstrap -->
    <link rel="stylesheet" href="./assets/css/bootstrap-datepicker3.css">

    <title>Form Data Pasien</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col-sm-5">
            <div class="img-hospitals mt-3 ml-3">
                <img src="./assets/img/hospitals.svg" width="100%">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="title mt-3 mb-3">
                <h3>Form Registrasi Pasien</h3>
                <p>Menggunakan session agar dapat menyimpan data sementara</p>
            </div>
            <div class="form-registrasi">
                <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                    <div class="form-group">
                        <label>Nama Pasien</label>
                        <input type="text" class="form-control" name="nama_pasien">
                    </div>
                    <div class="form-group">
                        <label>Nomor Rekam Medis</label>
                        <input type="text" class="form-control" name="no_medis">
                    </div>
                    <div class="form-group">
                        <label>Poli</label>
                        <select class="form-control" name="poli">
                            <option>-- Pilih Poli --</option>
                            <option value="Umum">Umum</option>
                            <option value="THT">THT</option>
                            <option value="Anak">Anak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pemeriksaan</label>
                        <input type="text" name="tanggal" placeholder="mm/dd/yy" class="tanggal form-control">
                    </div>
                    <div class="form-group">
                        <label>Jenis Pembayaran</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_bayar" value="Umum">
                            <label class="form-check-label">
                                Umum
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_bayar" value="BPJS">
                            <label class="form-check-label">
                                BPJS
                            </label>
                        </div>
                    </div>
                    <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
    <?php 
        // Jika terdapat aksi dari buton daftar
        if(isset($_POST['daftar'])) {
            // Ambil Data (kosong) dari Session
            if(isset($_SESSION['tmpPasien'])) $tmpPasien = $_SESSION['tmpPasien'];
            if(isset($_SESSION['tmpNoMedis'])) $tmpNoMedis = $_SESSION['tmpNoMedis'];
            if(isset($_SESSION['tmpPoli'])) $tmpPoli = $_SESSION['tmpPoli'];
            if(isset($_SESSION['tmpTanggal'])) $tmpTanggal = $_SESSION['tmpTanggal'];
            if(isset($_SESSION['tmpJenisBayar'])) $tmpJenisBayar = $_SESSION['tmpJenisBayar'];
    
            // Buat data dari Session menjadi sebuah Array dan atur nilai data seesion dari data inputan
            $tmpPasien[]     = $_POST['nama_pasien'];
            $tmpNoMedis[] = $_POST['no_medis'];
            $tmpPoli[] = $_POST['poli'];
            $tmpTanggal[] = $_POST['tanggal'];
            $tmpJenisBayar[] = $_POST['jenis_bayar'];
            
            // Simpan data Array yang baru ke Session
            $_SESSION['tmpPasien'] = $tmpPasien;
            $_SESSION['tmpNoMedis'] = $tmpNoMedis;
            $_SESSION['tmpPoli'] = $tmpPoli;
            $_SESSION['tmpTanggal'] = $tmpTanggal;
            $_SESSION['tmpJenisBayar'] = $tmpJenisBayar;
        }
    ?>

    <?php 
    $No = 1;
    if(isset($_POST['daftar'])) : ?>
    <?php 
        // Ambil Data Baru dari Session
        if(isset($_SESSION['tmpPasien'])) $tmpPasien = $_SESSION['tmpPasien'];
        if(isset($_SESSION['tmpNoMedis'])) $tmpNoMedis = $_SESSION['tmpNoMedis'];
        if(isset($_SESSION['tmpPoli'])) $tmpPoli = $_SESSION['tmpPoli'];
        if(isset($_SESSION['tmpTanggal'])) $tmpTanggal = $_SESSION['tmpTanggal'];
        if(isset($_SESSION['tmpJenisBayar'])) $tmpJenisBayar = $_SESSION['tmpJenisBayar'];  
    ?>
        <a href="reset.php" class="btn btn-warning text-light">Reset Data</a>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No.Rekam Medis</th>
                    <th scope="col">Poli</th>
                    <th scope="col">Tanggal Pemeriksaan</th>
                    <th scope="col">Jenis Pembayaran</th>
                </tr>
            </thead>
            <tbody>
            <!-- membuat perulangan menggunakan for -->
            <!-- i < count(data_array) (variabel i kurang dari jumlah elemen pada array $tmpPasien) -->
            <?php for($i = 0; $i < count($tmpPasien); $i++) : ?>
                <tr>
                    <th scope="row"><?= $No++ ?></th>
                    <td><?= $tmpPasien[$i]; ?></td>
                    <td><?= $tmpNoMedis[$i]; ?></td>
                    <td><?= $tmpPoli[$i]; ?></td>
                    <td><?= $tmpTanggal[$i]; ?></td>
                    <td><?= $tmpJenisBayar[$i]; ?></td>
                </tr>
            <?php endfor; ?>
            </tbody>
        </table>
    <?php endif; ?>
  </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Datepicker Bootstrap -->
    <script src="./assets/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
            $(document).ready(function () {
                // DOM Selection ke tag HTML yang memiliki class ".tanggal"
                $('.tanggal').datepicker({
                    // mengatur format tanggal
                    format: "mm-dd-yyyy",
                    autoclose:true
                });
            });
        </script>
  </body>
</html>