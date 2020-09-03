
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Kalkulator</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <div class="container">
            <div class="jumbotron">
                <table>
                    <tr>
                        <td><input class="form-control" type="text" name="angka1" placeholder="input bilangan pertama"></td>
                    </tr>
                    <tr>
                        <td><input class="form-control" type="text" name="angka2" placeholder="input bilangan pertama"></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-primary" type="submit" name="hitung">Hitung</button></td>
                    </tr>
                </table>
                <?php
                            function penjumlahan($angka1,$angka2){
                                $hasil = $angka2 + $angka1;
                                echo $hasil;
                                // echo '<br> hasil penjumlahan adalah : ' . $hasil;
                            }
                        
                            function perkalian($angka1,$angka2){
                                $hasil = $angka1 * $angka2;
                                echo $hasil;
                                // echo '<br> hasil perkalian adalah : ' . $hasil;
                            }
                        
                            function pembagian($angka1,$angka2){
                                $hasil = $angka1/$angka2;
                                echo $hasil;
                                // echo '<br>hasil pembagian adalah : ' . $hasil;
                            }
                        
                            function pengurangan($angka1,$angka2){
                                $hasil = $angka1-$angka2;
                                echo $hasil;
                                // echo '<br> hasil pengurangan adalah : ' . $hasil;
                            }

                            $angka1 = $_POST['angka1'] ?? '';
                            $angka2 = $_POST['angka2'] ?? '';
                    ?>
                    <?php if(isset($_POST['hitung'])) : ?>
                <div class="card mt-2" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Bilangan 1 adalah : <?= $angka1 ?></li>
                        <li class="list-group-item">Bilangan 2 adalah : <?= $angka2 ?></li>
                        <li class="list-group-item">Hasil penjumlahan = <?php penjumlahan($angka1,$angka2); ?></li>
                        <li class="list-group-item">Hasil pengurangan = <?php pengurangan($angka1,$angka2); ?></li>
                        <li class="list-group-item">Hasil pembagian = <?php pembagian($angka1,$angka2); ?></li>
                        <li class="list-group-item">Hasil perkalian = <?php perkalian($angka1,$angka2); ?></li>
                    </ul>
                </div>
                    <?php endif; ?>
            </div>
        </div>
        
    </form>
<script src="./js/bootstrap.min.js"></script>    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>