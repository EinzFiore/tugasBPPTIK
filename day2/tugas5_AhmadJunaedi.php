
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <table>
            <tr>
                <td>Angka 1</td>
                <td><input type="text" name="angka1"></td>
            </tr>
            <tr>
                <td>Angka 2</td>
                <td><input type="text" name="angka2"></td>
            </tr>
            <tr>
                <td><button type="submit" name="hasil">Hasil</button></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['hasil'])){
        function penjumlahan($angka1,$angka2){
            $hasil = $angka2 + $angka1;
            echo '<br> hasil penjumlahan adalah : ' . $hasil;
        }
    
        function perkalian($angka1,$angka2){
            $hasil = $angka1 * $angka2;
            echo '<br> hasil perkalian adalah : ' . $hasil;
        }
    
        function pembagian($angka1,$angka2){
            $hasil = $angka1/$angka2;
            echo '<br>hasil pembagian adalah : ' . $hasil;
        }
    
        function pengurangan($angka1,$angka2){
            $hasil = $angka1-$angka2;
            echo '<br> hasil pengurangan adalah : ' . $hasil;
        }

        $angka1 = $_POST['angka1'] ?? '';
        $angka2 = $_POST['angka2'] ?? '';
    
        echo 'Bilangan 1 adalah : ' . $angka1;
        echo '<br> Bilangan 2 adalah : ' . $angka2;
        echo '<br> =============================';
        penjumlahan($angka1,$angka2);
        pengurangan($angka1,$angka2);
        perkalian($angka1,$angka2);
        pembagian($angka1,$angka2);
    }
?>
</body>
</html>