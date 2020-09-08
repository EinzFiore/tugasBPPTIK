<?php 
    function shopping($harga){
        // membuat local varibel
        $dompet = 10000;
        
        // menentukan jika harga yang ditentukan memiliki nilai yang lebih besar dari dompet 
        if($harga > $dompet){
            // jika true maka akan mencetak string berikut.
            echo 'Mohon maaf, uang anda kurang';
        } else{
            // Jika false akan mencetak nilai dibawah.
            $sisaDompet = $dompet - $harga; // membuat local variabel sisaDompet
            echo "MyDompet = $dompet <br> Harga Belanjaan = $harga <br> Sisa Uang di dompet = $sisaDompet <br> 
            Terimakasih telah berbelanja :)";
        };
    }

    shopping(5000);
?>