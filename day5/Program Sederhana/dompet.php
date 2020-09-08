<?php 
    function myWallet($uang){
        // membuat local variabel
        $nama = 'Ahmad Junaedi';
        $pekerjaan = 'Operator Warnet';
        $uang = $uang;

        // mencetak string beserta argumen yang dikirim
        echo "Nama : $nama <br> Pekerjaan : $pekerjaan <br> Uangku = $uang";
    }

    // memanggil fungsi myWallet beserta argumen
    myWallet(3000);
?>