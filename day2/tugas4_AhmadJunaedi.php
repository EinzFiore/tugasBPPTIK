<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Bilangan</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
        <table>
            <tr>
                <td>Jumlah Bintang</td>
                <td>=</td>
                <td><input type="text" name="angka"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Kirim</button></td>
            </tr>
        </table>
    </form>
    <?php
        $angka = $_POST['angka'] ?? '';
        if(isset($_POST['submit'])){
            for($i = $angka; $i >= 0; $i-- ){
                for($a = $angka;  $a > $i; $a--){
                    echo '*';
                }
                echo '<br>';
            } 
        }
    ?>
</body>
</html>